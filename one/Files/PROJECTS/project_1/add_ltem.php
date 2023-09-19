
<?php 


 if (isset($_REQUEST['submit'])) {
    echo "inside if";
    echo "<pre>";
    print_r ($_REQUEST);
    print_r ($_FILES);
    echo "</pre>";
      move_uploaded_file($_FILES["item_image"]["name"],"./Save_img/".uniqid().time().$_FILES["item_image"]["tmp_name"]);
      $_SESSION["product"][] = ["name"=>$_REQUEST["item_name"],"description"=>$_REQUEST["item_description"],
                                "price"=>$_REQUEST["item_price"],"item_quantity"=>$_REQUEST["item_quantity"],
                                "item_category"=>$_REQUEST["item_category"],
                                "item_img_name"=>uniqid().time().$_FILES["item_image"]["tmp_name"]];
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
            <input class="feild image" id="item_image" type="file" name="item_image" accept="image/*" placeholder="item_image_link" >
            <button id="Add_item_submit" type="submit" value="submit" name="submit">button</button>
            
        </form>
        
</body>
</html>