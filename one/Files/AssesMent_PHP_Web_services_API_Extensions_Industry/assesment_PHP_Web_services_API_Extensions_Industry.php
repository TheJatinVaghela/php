<?php
//GET 
if($_SERVER["REQUEST_METHOD"] == "GET"){
    $data = json_decode(file_get_contents("php://input"),true);
    $products = array(
        array("id" => "1", "name" => "Product 1", "price" => 19.99, "description" => "Description for Product 1"),
        array("id" => "2", "name" => "Product 2", "price" => 29.99, "description" => "Description for Product 2"),
        array("id" => "3", "name" => "Product 3", "price" => 14.99, "description" => "Description for Product 3"),
        array("id" => "4", "name" => "Product 4", "price" => 39.99, "description" => "Description for Product 4"),
        array("id" => "5", "name" => "Product 5", "price" => 24.99, "description" => "Description for Product 5"),
        array("id" => "6", "name" => "Product 6", "price" => 49.99, "description" => "Description for Product 6"),
        array("id" => "7", "name" => "Product 7", "price" => 34.99, "description" => "Description for Product 7"),
        array("id" => "8", "name" => "Product 8", "price" => 64.99, "description" => "Description for Product 8"),
        array("id" => "9", "name" => "Product 9", "price" => 19.99, "description" => "Description for Product 9"),
        array("id" => "10", "name" => "Product 10", "price" => 29.99, "description" => "Description for Product 10"),
        array("id" => "11", "name" => "Product 11", "price" => 14.99, "description" => "Description for Product 11"),
        array("id" => "12", "name" => "Product 12", "price" => 39.99, "description" => "Description for Product 12"),
        array("id" => "13", "name" => "Product 13", "price" => 24.99, "description" => "Description for Product 13"),
        array("id" => "14", "name" => "Product 14", "price" => 49.99, "description" => "Description for Product 14"),
        array("id" => "15", "name" => "Product 15", "price" => 34.99, "description" => "Description for Product 15"),
        array("id" => "16", "name" => "Product 16", "price" => 64.99, "description" => "Description for Product 16"),
        array("id" => "17", "name" => "Product 17", "price" => 19.99, "description" => "Description for Product 17"),
        array("id" => "18", "name" => "Product 18", "price" => 29.99, "description" => "Description for Product 18"),
        array("id" => "19", "name" => "Product 19", "price" => 14.99, "description" => "Description for Product 19"),
        array("id" => "20", "name" => "Product 20", "price" => 39.99, "description" => "Description for Product 20"),
    );

    $jsonData = json_encode($products, JSON_PRETTY_PRINT);
    echo $jsonData;
}
///POST
else if($_SERVER["REQUEST_METHOD"] == "POST"){
    $data = json_decode(file_get_contents("php://input"),true);
    // I Get Data And Chack For The Id Of Array If I find I Send Back Data
    $data = array(
        array("id" => "2", "name" => "Product 2", "price" => 29.99, "description" => "Description for Product 2")
    );
    $Data = json_encode($data, JSON_PRETTY_PRINT);
    echo $Data;
}
//PUT
else if($_SERVER["REQUEST_METHOD"] == "PUT"){
    $data = json_decode(file_get_contents("php://input"),true);
    // I Get Data And Chack For The Id Of Array If I find I Update HOLE Data Then I Send Back Data
    $Data = json_encode($data, JSON_PRETTY_PRINT);
    echo $Data;
}
//DELETE
else if($_SERVER["REQUEST_METHOD"] == "DELETE"){
    $data = json_decode(file_get_contents("php://input"),true);
    // I Get Data And Chack For The Id Of Array If I find I Delete Data Then I Send Back Responce Code 204
    $data = array(
        'success' => true, 'message' => 204
    );
    $Data = json_encode($data, JSON_PRETTY_PRINT);
    echo $Data;
}
