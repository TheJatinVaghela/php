


<?php

ini_set('display_errors','Off');
            if(isset($_REQUEST['submit_btn']) && ($_COOKIE['username'] == null) && ($_COOKIE['userEmail'] == null)){
              setcookie("username", $_REQUEST['username'],time()+3600);
              setcookie("userEmail", $_REQUEST['useremail'],time()+3600);
              header("Location: sign_in.php");
            }elseif(($_COOKIE['username'] != null) && ($_COOKIE['userEmail'] != null)){
              header("Location: sign_in.php");
            }elseif(isset($_REQUEST['submit_btn'])&& ($_COOKIE['username'] == "") && ($_COOKIE['userEmail'] == "")){
              setcookie("username", $_REQUEST['username'],time()+3600);
              setcookie("userEmail", $_REQUEST['useremail'],time()+3600);
              header("Location: sign_in.php");
            }
    ?>


    <title>seller form</title>
  
      <!-- <script src="./localstorage.js" defer></script> -->

    <form  method="post" enctype="multipart/form-data">
        <h1>SELLER FORM</h1>
        <br>
        <label for="username">NAME </label>
        <input type="text" name="username" id="username" require>

        <br>

        <label for="useremail">pass </label>
        <input type="password" name="useremail" id="useremail" require>
        <button type="submit" name="submit_btn">  SBMITE </button>
        
        

