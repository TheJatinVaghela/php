


<?php
            if (isset($_REQUEST['submit_btn'])) {
                // print_r($_REQUEST);
                setcookie("username", $_REQUEST['username'],time()+3600);
                setcookie("userEmail", $_REQUEST['useremail'],time()+3600);
                
               
            }
    ?>


    <title>seller form</title>
  
      <!-- <script src="./localstorage.js" defer></script> -->

    <form  action="./add_ltem.php" method="post" enctype="multipart/form-data">
        <h1>SELLER FORM</h1>
        <br>
        <label for="username">NAME </label>
        <input type="text" name="username" id="username" require>

        <br>

        <label for="useremail">EMAIL </label>
        <input type="text" name="useremail" id="useremail" require>
        <button type="submit" name="submit_btn">  SBMITE </button>
        
        

