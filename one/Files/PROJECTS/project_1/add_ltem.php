
<?php 

session_start();
  if (isset($_REQUEST['submit'])) {
     echo "inside if";
      echo "<pre>";
   //   print_r ($_REQUEST);
      print_r ($_FILES);
      echo "</pre>";
        $Storge = "F:/Xampp/xammp/htdocs/php/one/Files/PROJECTS/project_1/Storage/";
        $id= uniqid().time();
        $img_name = $_FILES["item_image"]["name"];
        move_uploaded_file($_FILES["item_image"]["tmp_name"],$Storge.$id.$img_name);
       $_SESSION["product"][] =["name"=>$_REQUEST["item_name"],"description"=>$_REQUEST["item_description"],
                                "price"=>$_REQUEST["item_price"],"item_quantity"=>$_REQUEST["item_quantity"],
                                "item_category"=>$_REQUEST["item_category"],
                                "item_img_name"=>$id.$img_name];
                               
      echo "<pre>"; 
         print_r($_SESSION["product"]);
      echo "</pre>"; 
     
  }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>add_item</title>
  
      <script src="./localstorage.js" defer></script>
</head>
<body>
<h1>add_item</h1>
       
       <form action="" method="post" enctype="multipart/form-data">
           
           <input class="feild price" id="item_name" type="text" name="item_name" placeholder="item_name" require>
           <input class="feild price" id="item_price" type="text" name="item_price" placeholder="item_price" require>
           <input class="feild description" id="item_description" type="text" name="item_description" placeholder="item_description" require>
           <input class="feild quantity" id="item_quantity" type="text" name="item_quantity" placeholder="item_quantity" require>
           <input class="feild category" id="item_category" type="text" name="item_category" placeholder="item_category" require>
           <input class='feild image' id='item_image' type='file' name='item_image' accept='image/*' placeholder='item_image_link' >
            
           <button id="Add_item_submit" type="submit" value="submit" name="submit"  >button</button>
           
       </form>
<hr>
       <!-- <button id="Show_List">Show list</button> -->
     <div id="LIST_Wrapper">
        <?php 
        if (isset($_REQUEST['submit'])) {
              foreach($_SESSION["product"] as $key => $value) {
              //  print_r($value);
              //  print_r("<div class='card'><div class='card-body' id=$key><p  contenteditable='false' class='A_$key-card-text item_name'>$value[name]</p></div></div>");
               print_r( "
                  <div class='card' >
                    <div class='card-body' id='$key'>
                      <p  contenteditable='false' class='A_$key-card-text item_name'>$value[name]</p>
                      <img src='./Storage/$value[item_img_name]' alt='IMG NOT FOUND'>
                      <p  contenteditable='false' class='A_$key-card-text item_price'>$value[price]</p>
                      <p  contenteditable='false' class='A_$key-card-text item_description'>$value[description]</p>
                      <p  contenteditable='false' class='A_$key-card-text item_quantity'>$value[item_quantity]</p>
                      <p  contenteditable='false' class='A_$key-card-text item_category'>$value[item_category]</p>
                    
                      <button id='EDIT' class='btn btn-primary' onclick='EDIT(this)'>Edit</button>
                      <button id='DEL' class='btn btn-danger' onclick='DELETE(this)'>Delete</button>
                    </div>
                  </div>
                  <hr/>"); 
                
              };
         } 
         ?>
    </div> 
</body>
</html>
  
        
