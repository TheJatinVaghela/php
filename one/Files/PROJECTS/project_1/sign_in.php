<?php
include_once('header.php');
ini_set('display_errors','Off');

if(isset($_REQUEST['submit_btn'])){
    // echo "<pre>";
    //  print_r($_COOKIE['userEmail']);
    //  print_r($_REQUEST);
    // echo "</pre>";
                if(($_COOKIE['username'] ==  $_REQUEST['username']) && ($_COOKIE['userEmail'] ==  $_REQUEST['userEmail'])){
               
                    print_r("in");
                    header("Location: add_ltem.php");
                }elseif(($_COOKIE['username'] !=  $_REQUEST['username']) || ($_COOKIE['userEmail'] !=  $_REQUEST['userEmail'])){
                    print_r("
                   
                      <h1> error : enter valid info or Create new </h1> 
                   
                  ");
                };

                   
              
   };
    ?>
<?php
if(isset($_REQUEST['forgot_btn'])){
// unset cookies

    $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
    foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        setcookie($name, '', time()-1000);
        setcookie($name, '', time()-1000, '/');
    }

     header("Location: index.php");
 };
?>

    <title>sign in form</title>
  
      <!-- <script src="./localstorage.js" defer></script> -->

    <form  method="post" enctype="multipart/form-data">
        <h1>sign in SELLER</h1>
        <br>
        <label for="username">NAME </label>
        <input type="text" name="username" id="username" require>

        <br>

        <label for="userEmail">pass </label>
        <input type="password" name="userEmail" id="userEmail" require>
        <button type="submit" name="submit_btn">  SBMITE </button>
        <button type="submit" name="forgot_btn">  create New </button>
        