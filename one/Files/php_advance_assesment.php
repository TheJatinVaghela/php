<?php
session_start();

function addTask(&$tasks, $path, $task) {
    $location = &$tasks;
    foreach ($path as $step) {
        $location = &$location[$step];
    }
    $location[] = array('name' => $task, 'subtasks' => array());
}

function deleteTask(&$tasks, $path) {
    $location = &$tasks;
    $prev_location = &$location;
    $step = 0;
    foreach ($path as $step) {
        if (!is_array($location)) {
            return;
        }
        $prev_location = &$location;
        $location = &$location[$step];
    }
    if (is_array($prev_location)) {
        array_splice($prev_location, $step, 1);
    }
}


function clearTasks(&$tasks) {
    $tasks = array();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $path = isset($_POST['path']) ? explode(",", $_POST['path']) : array();

    if (isset($_POST['task'])) {
        addTask($_SESSION['tasks'], $path, $_POST['task']);
    }

    if (isset($_POST['delete'])) {
        deleteTask($_SESSION['tasks'], $path);
    }

    if (isset($_POST['clear'])) {
        clearTasks($_SESSION['tasks']);
    }
}

if (!isset($_SESSION['tasks'])) {
    $_SESSION['tasks'] = array();
}
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        form {
            margin-bottom: 1em;
        }
    </style>
</head>
<body>
    <h1>Task List Manager</h1>

    <?php
    function displayTasks($tasks, $path = array()) {
        if (!is_array($tasks)) {
            return;
        }

        foreach ($tasks as $index => $task) {
            echo "<div style='margin-left: 20px;'>";

            if (is_array($task) && isset($task['name'])) {
                echo "<form method='post'>";
                echo $task['name'] . " ";
                echo "<input type='hidden' name='delete' value='" . implode(",", array_merge($path, array($index))) . "'>";
                echo "<input type='submit' value='Delete'>";
                echo "</form>";

                echo "<form method='post'>";
                echo "<label for='task'>Add Subtask:</label><br>";
                echo "<input type='text' id='task' name='task'><br>";
                echo "<input type='hidden' name='path' value='" . implode(",", array_merge($path, array($index, 'subtasks'))) . "'>";
                echo "<input type='submit' value='Add Subtask'>";
                echo "</form>";

                if (isset($task['subtasks'])) {
                    displayTasks($task['subtasks'], array_merge($path, array($index, 'subtasks')));
                }
            }

            echo "</div>";
        }
    }

    displayTasks($_SESSION['tasks']);
    ?>

    <form method="post">
        <label for="task">Add Task:</label><br>
        <input type="text" id="task" name="task"><br>
        <input type="submit" value="Add Task">
    </form>

    <form method="post">
        <input type="hidden" name="clear" value="true">
        <input type="submit" value="Clear All">
    </form>
</body>
</html>
