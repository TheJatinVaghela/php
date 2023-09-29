
<?php include_once 'header.php'?>
<?php 


  if (isset($_REQUEST['submit'])) {
     echo "inside if";
      echo "<pre>";
   //   print_r ($_REQUEST);
      print_r ($_FILES);
      echo "</pre>";
        $Storge = "F:/Xampp/xammp/htdocs/php/one/Files/PROJECTS/project_1/Storage/";
        $img_name = $_FILES["item_image"]["name"];
        $id='';
        if($img_name != null){$id= uniqid().time();}
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
    
<h1>add_item</h1>
       
       <form  method="post" enctype="multipart/form-data" >
           
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
    
       <?php
  if (isset($_REQUEST['submit']) && $_SESSION["product"]) {
      echo "<pre>"; 
      print_r($_SESSION["product"]);
       echo "</pre>"; 
       header("Location: list.php");
   };
  ?>

 
  
