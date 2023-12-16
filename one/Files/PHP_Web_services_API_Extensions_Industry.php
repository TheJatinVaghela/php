<!-- Create API for Registration & Login Page -->
<?php
$host = 'localhost';
$dbname = 'module5';
$dire = 'root';
$password = '';

$mysqli = new mysqli($host, $dire, $password, $dbname);

//if error
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Functions for user registration
// for MVC Api the url will be :-
// http://localhost/controller/user/registeruser.php
//or if the function is included in the file of user that it will be :-
//http://localhost/controller/user
function registerUser($u_name, $u_password) {
    global $mysqli;

    // Hash the password making it safe
    $u_hashedPassword = password_hash($u_password, PASSWORD_DEFAULT);

    //it says to prepare for this query 
    $stmt = $mysqli->prepare("INSERT INTO users (u_name, u_password) VALUES (?, ?)");
    //it says to add 's'=string value to the first(?) after that again add 's'=string to the second value(?)
    $stmt->bind_param("ss", $u_name, $u_hashedPassword);
    
    // Insert user into the database
    if ($stmt->execute()) {
        //it will retrun this arrray to forntend 
        return ['success' => true, 'message' => 'User registered successfully'];
    } else {
        return ['success' => false, 'message' => 'Registration failed'];
    }
}


// Functions for user loginuser
// for MVC Api the url will be :-
// http://localhost/controller/user/loginuser.php 
//or if the function is included in the file of user that it will be :-
//http://localhost/controller/user
function loginUser($u_name, $u_password) {
    global $mysqli;

    $stmt = $mysqli->prepare("SELECT * FROM users WHERE u_name = ?");
    $stmt->bind_param("s", $u_name);
    // Fetch user from the database
    $stmt->execute();
    //get result
    $result = $stmt->get_result();
    //make it arry
    $user = $result->fetch_assoc();

    // Verify password and if true retun success=true else success=false 
    if ($user && password_verify($u_password, $user['u_password'])) {
        return ['success' => true, 'message' => 'Login successful'];
    } else {
        return ['success' => false, 'message' => 'Invalid username or password'];
    }
}

// Check the request method
$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case 'POST':
        // Handle registration
        if (isset($_POST['action']) && $_POST['action'] == 'register') {
            $username = $_POST['u_name'];
            $password = $_POST['u_password'];

            // Call the registration function
            $result = registerUser($username, $password);

            // Return the result as JSON
            echo json_encode($result);
        }

        // Handle login
        elseif (isset($_POST['action']) && $_POST['action'] == 'login') {
            $username = $_POST['u_name'];
            $password = $_POST['u_password'];

            // Call the login function
            $result = loginUser($username, $password);

            // Return the result as JSON
            echo json_encode($result);
        }
        break;

    default:
        // Handle unsupported methods
        http_response_code(405);
        echo json_encode(['error' => 'Method Not Allowed']);
        break;
}
?>

//Create Web Service for your MVC Project.
<?php
/* like above code this is caled web service 
    and if we have MVC just tranfert this code in  a file named web_service.php and in the top include 
    the controller file in which we have the function with logic and in the web_service file create a
    object for that controller file and call the function with '->' and its done 
*/
$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case 'POST':
        // Handle registration
        if (isset($_POST['action']) && $_POST['action'] == 'register') {
            $username = $_POST['u_name'];
            $password = $_POST['u_password'];

            // Call the registration function
            $result = registerUser($username, $password);

            // Return the result as JSON
            echo json_encode($result);
        }

        // Handle login
        elseif (isset($_POST['action']) && $_POST['action'] == 'login') {
            $username = $_POST['u_name'];
            $password = $_POST['u_password'];

            // Call the login function
            $result = loginUser($username, $password);

            // Return the result as JSON
            echo json_encode($result);
        }
        break;

    default:
        // Handle unsupported methods
        http_response_code(405);
        echo json_encode(['error' => 'Method Not Allowed']);
        break;
}
?>

<!-- Create API for Image Uploadin -->
<?php 
// CREATE TABLE images (
//     id INT AUTO_INCREMENT PRIMARY KEY,
//     filename VARCHAR(255) NOT NULL
// );

// connect DB
$host = 'localhost';
$dbname = 'module5';
$dire = 'root';
$password = '';

$mysqli = new mysqli($host, $dire, $password, $dbname);

//if error
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Check if form submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['image'])) {
        // Handle image upload
        $targetDir = 'uploads/';
        $targetFile = $targetDir . basename($_FILES['image']['name']);

        //  if file already exists ERROR 'success' => false
        if (file_exists($targetFile)) {
            echo json_encode(['success' => false, 'message' => 'File already exists.']);
        } else {
            // Upload the file
            if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
                // Insert the file details into the database
                $fileName = basename($_FILES['image']['name']);
                $stmt = $mysqli->prepare("INSERT INTO images (filename) VALUES (?)");
                $stmt->bind_param("s", $fileName);

                //adding file name to the database
                if ($stmt->execute()) {
                    echo json_encode(['success' => true, 'message' => 'Image uploaded successfully.']);
                } else {
                    echo json_encode(['success' => false, 'message' => 'Failed to insert into database.']);
                }
            } else {
                echo json_encode(['success' => false, 'message' => 'Failed to upload file.']);
            }
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'No file provided.']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method.']);
}



?>