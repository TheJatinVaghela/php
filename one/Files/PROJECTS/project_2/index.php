<?php

session_start();
 if(isset($_REQUEST['submit'])){
    echo "<pre>";
    print_r($_REQUEST);
    echo "<hr />";
    print_r($_FILES);
    echo "</pre>";

    $_SESSION["product"][]=['name'=>$_REQUEST['item_name'],'price'=>$_REQUEST['item_price'],
                            'description'=>$_REQUEST['item_description'],'quantity'=>$_REQUEST['item_quantity'],
                            'category'=>$_REQUEST['item_category'],'img'=>$_FILES['item_image']['tmp_name'],];
    echo "<pre>";
    echo "<hr/>";
    print_r($_SESSION);
    echo "</pre>";
 };
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
        <form action="#" method="post" enctype="multipart/form-data">
           
           <input class="feild price" id="item_name" type="text" name="item_name" placeholder="item_name" require>
           <input class="feild price" id="item_price" type="text" name="item_price" placeholder="item_price" require>
           <input class="feild description" id="item_description" type="text" name="item_description" placeholder="item_description" require>
           <input class="feild quantity" id="item_quantity" type="text" name="item_quantity" placeholder="item_quantity" require>
           <input class="feild category" id="item_category" type="text" name="item_category" placeholder="item_category" require>
           <input class='feild image' id='item_image' type='file' name='item_image' accept='image/*' placeholder='item_image_link' >
        
           <button id="Add_item_submit" type="submit" value="submit" name="submit">button</button>
           
        </form>
</body>
</html>