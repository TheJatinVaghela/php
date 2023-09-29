
<?php include_once 'header.php'?>
<!-- <?php
  //  if(isset($_REQUEST['Edit'])){
  //   echo '<pre>';
  //     print_r($_REQUEST);
  //     echo '<hr/>';
  //     print_r($_FILES);
  //   echo '</pre>';
  //  }
?> -->
<?php
  if(isset($_REQUEST['DeleteAll'])){
    echo '<pre>';
      print_r($_REQUEST);
      echo '<hr/>';
      print_r($_SESSION['product'] = null);

    echo '</pre>';
  }
?>
    <h1>list page</h1>


        <?php 
         if ($_SESSION["product"] !== null) {
              foreach($_SESSION["product"] as $key => $value) {
              //  print_r($value);
              //  print_r("<div class='card'><div class='card-body' id=$key><p  contenteditable='false' class='A_$key-card-text item_name'>$value[name]</p></div></div>");
 
               print_r( "
               <div class='card' >
               <div class='card-body' id='$key'>
                 <form action='' method='post' enctype='multipart/form-data'>
                      <input type='hidden' value='$key' name='id' contenteditable='false'/>
                      <p  contenteditable='false' class='A_$key-card-text item_name'>$value[name]</p>
                      <input type='hidden' type='text' name='name' value='$value[name]'>
                      <img src='./Storage/$value[item_img_name]' alt='IMG NOT FOUND' width='100px' hight='100px'>
                      <input type='hidden' type='img' name='item_img_name' value='$value[item_img_name]'>
                      <p  contenteditable='false' class='A_$key-card-text item_price'>$value[price]</p>
                      <input type='hidden' type='text' name='price' value='$value[price]'>
                      <p  contenteditable='false' class='A_$key-card-text item_description'>$value[description]</p>
                      <input type='hidden' type='text' name='description' value='$value[description]'>
                      <p  contenteditable='false' class='A_$key-card-text item_quantity'>$value[item_quantity]</p>
                      <input type='hidden' type='text' name='item_quantity' value='$value[item_quantity]'>
                      <p  contenteditable='false' class='A_$key-card-text item_category'>$value[item_category]</p>
                      <input type='hidden' type='text' name='item_category' value='$value[item_category]'>
                    
                      <!-- <button id='EDIT' type='submit' class='btn btn-primary' onclick='EDIT(this)' value='Edit' name='Edit'>Edit</button> -->
                      <button id='DEL'  type='submit'  class='btn btn-danger' onclick='DELETE(this)' value='DeleteAll' name='DeleteAll'>Delete All</button>
                  </form>
                </div>
                </div>
                  <hr/>"); 
                
              };
          }else{
            print_r("
              <h1>no products <a href='http://localhost/php/one/files/PROJECTS/project_1/add_ltem.php'>click here</a> to go to add products</h1>
            ");
          }
         ?>

    

