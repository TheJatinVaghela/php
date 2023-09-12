


<?php
            if (isset($_REQUEST['submit_btn'])) {
                // print_r($_REQUEST);
                setcookie("username", $_REQUEST['username'],time()+3600);
                setcookie("userEmail", $_REQUEST['useremail'],time()+3600);

                header("Location:./add_ltem.php");
                exit();
            }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>seller form</title>
</head>
<body>
    <form  action="" method="post" enctype="multipart/form-data">
        <h1>SELLER FORM</h1>
        <br>
        <label for="username">NAME </label>
        <input type="text" name="username" id="username" require>

        <br>

        <label for="useremail">EMAIL </label>
        <input type="text" name="useremail" id="useremail" require>
        <button type="submit" name="submit_btn">  SBMITE </button>
        
        


    </form>
</body>
</html>