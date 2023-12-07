<?php
session_start();

// Initialize tasks if not already set
if (!isset($_SESSION['tasks'])) {
    $_SESSION['tasks'] = [];
}

function addSubTask(&$tasks, $taskName, $parentIndices) {
    // Access the correct level of sub-tasks
    foreach ($parentIndices as $index) {
        $tasks = &$tasks[$index]['sub_tasks'];
    }
    // Add the new sub-task
    $tasks[] = ['name' => $taskName, 'sub_tasks' => []];
}

// Add a new task or sub-task
if (isset($_POST['new_task']) && !empty($_POST['task_name'])) {
    // If parent indices are provided, add a sub-task
    if (isset($_POST['parent_indices'])) {
        $parentIndices = explode(',', $_POST['parent_indices']);
        addSubTask($_SESSION['tasks'], $_POST['task_name'], $parentIndices);
    } else { // No parent indices, add a main task
        $_SESSION['tasks'][] = ['name' => $_POST['task_name'], 'sub_tasks' => []];
    }
}

// Delete a specific task or sub-task
if (isset($_POST['delete_task']) && isset($_POST['task_indices'])) {
    $taskIndices = explode(',', $_POST['task_indices']);
    $lastIndex = array_pop($taskIndices);
    $tasks = &$_SESSION['tasks'];
    // Access the correct level of sub-tasks
    foreach ($taskIndices as $index) {
        $tasks = &$tasks[$index]['sub_tasks'];
    }
    // Remove the task
    array_splice($tasks, $lastIndex, 1);
}

// Delete all tasks
if (isset($_POST['delete_all'])) {
    $_SESSION['tasks'] = [];
}

// Error handling
$error = '';
if (isset($_POST['new_task']) && empty($_POST['task_name'])) {
    $error = 'Please enter a task name.';
}

// Function to render tasks recursively
function renderTasks($tasks, $parentIndices = []) {
    foreach ($tasks as $index => $task) {
        echo '<div class="task">';
        echo '<strong>' . htmlspecialchars($task['name']) . '</strong>';
        $currentIndices = array_merge($parentIndices, [$index]);
        $indicesString = implode(',', $currentIndices);
        echo '<form method="post" class="task-action">';
        echo '<input type="hidden" name="task_indices" value="' . $indicesString . '">';
        echo '<button type="submit" name="delete_task">Delete</button>';
        echo '</form>';
        echo '<form method="post" class="task-action">';
        echo '<input type="hidden" name="parent_indices" value="' . $indicesString . '">';
        echo '<input type="text" name="task_name" placeholder="Enter sub-task name">';
        echo '<button type="submit" name="new_task">Add Sub-Task</button>';
        echo '</form>';
        if (!empty($task['sub_tasks'])) {
            renderTasks($task['sub_tasks'], $currentIndices);
        }
        echo '</div>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task Management System</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        h1 {
            color: #333;
            text-align: center;
        }

        .container {
            width: 80%;
            margin: auto;
            background: white;
            padding: 20px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2);
        }

        .task {
            background: #fff;
            border: 1px solid #ddd;
            margin-bottom: 10px;
            padding: 10px;
            position: relative;
        }

        .task strong {
            color: #5D6975;
        }

        .task form {
            display: inline;
        }

        .task input[type="text"] {
            border: 1px solid #ddd;
            padding: 5px;
            margin-right: 5px;
        }

        .task button {
            background: #5D6975;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }

        .task button:hover {
            background: #434343;
        }

        .error {
            color: red;
            text-align: center;
            margin: 10px 0;
        }

        form.main-task {
            margin-bottom: 30px;
        }

        form.main-task input[type="text"] {
            width: calc(100% - 110px);
        }

        form.main-task button {
            width: 100px;
        }

        form.delete-all {
            text-align: center;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Task Management System</h1>
        <?php if ($error): ?>
            <div class="error"><?= $error ?></div>
        <?php endif; ?>

        <form method="post" class="main-task">
            <input type="text" name="task_name" placeholder="Enter task name">
            <button type="submit" name="new_task">Add Task</button>
        </form>

        <form method="post" class="delete-all">
            <button type="submit" name="delete_all">Delete All Tasks</button>
        </form>

        <?php renderTasks($_SESSION['tasks']); ?>
    </div>
</body>
</html>
