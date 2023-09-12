


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
       
            <input class="feild price" id="item_name" type="text" name="item_name" placeholder="item_name" require>
            <input class="feild price" id="item_price" type="text" name="item_price" placeholder="item_price" require>
            <input class="feild description" id="item_description" type="text" name="item_description" placeholder="item_description" require>
            <input class="feild quantity" id="item_quantity" type="text" name="item_quantity" placeholder="item_quantity" require>
            <input class="feild category" id="item_category" type="text" name="item_category" placeholder="item_category" require>
            <input class="feild image" id="item_image" type="text" name="item_image" placeholder="item_image" require>
            <input id="Add_item_submit" onclick="Add()" type="submit" value="submit">
        
</body>
</html>