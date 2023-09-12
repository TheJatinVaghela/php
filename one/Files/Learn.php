<?php
    // $name= ['name',23,true,29.7];
   
    // var_dump($name);
    // var_export($name);

    // date_default_timezone_set("asia/kolkata");
    // echo date("Y-m-d H:i:s"."\n");
    // echo date("d-m-y");
    
    //Environment
    $_ENV = getenv();

    echo"<pre>";

    // echo $_ENV;
    print_r($_ENV);
    // var_dump($_ENV);
    // var_export($_ENV);


    // print_r($_SERVER);
    echo"</pre>";

    /*
    PHP file handle know some basic information like file-name, file-size,
    type of the file and a few attributes about the file which has been selected to be uploaded
     */
    print_r($_FILES);
    /*
    $GLOBALS is a PHP super global variable which is used 
    to access global variables from anywhere in the PHP script (also from within functions or methods).
    PHP stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable.
    */
    print_r($GLOBALS);

    // Associative Array it can hole numeric and alpha numeric value user defined
    $assocarr = ["sports"=>100,"english"=>105,"hindi"=>99,"SS"=>67,"drama"=>87];

    echo "<pre>";
    print_r($assocarr); // FULL ARREY
    echo $assocarr["sports"]; // ONLY VALUE 100
    echo "</pre>";

    foreach ($assocarr as $key => $value) 
    {
    echo "$key is $value is <br>";
    }

    // MultiDimensional Array
    // $multiarr = array(
    // "DPS"=>
    // array("10th_Standard"=>
    // array("parth"=>array("sports"=>35,"music"=>45),
    // "mustafa"=>array("ss"=>60,"sports"=>80)),
    // "11th_Standard"=>
    // array("adnan"=>
    // array("sports"=>60,"music"=>33)
    // )));
    // echo"<br>";
    // print_r(array_column($multiarr,'10th_Standard'));
    // 
        
    $a1 = array("a"=>"red","b"=>"green","c"=>"white");
    $a2 = array("e"=>"red","f"=>"orange","z"=>"pink");


    echo "<pre>";
    //Compare the values of two arrays, and return the differences:
    print_r(array_diff($a2,$a1));

    //Compare the values of two arrays, and return the differences:
    print_r(array_diff_key($a2,$a1));

    //Compare the keys of two arrays, and return the differences:
    print_r(array_diff_assoc($a2,$a1));
    echo "</pre>";

    //The array_pad() function inserts a specified number of elements, with a specified value, to an array.
    // Tip: If you assign a negative size parameter, the function will insert new elements BEFORE the original 
    //elements (See example below).
     
    $arr = ["TOPS","SG","Gujarat"];
    $newarray = array_pad($arr,10,"Ahmedabad");
    print_r($newarray);

    $string = "This is a demo demo string and it can hold alpha numerice value and you can basically write anything in this field no matter what 0-9 A-Z a-z @!#$%^&*()";

    echo "String True";
     echo "<br>";
     echo stristr($string,"string",true);
     echo "<br>";
     echo stristr($string,"demo");

    ?>
<!-- 

    <h1>Super Global Variable</h1>
    <h2>======================</h2>
    
    <h1>Informative Super Globals</h1>
    <h2>=========================</h2>
    <h3>$_ENV</h3>
    <h3>$_SERVER</h3>
    
    <h1>Data Receiver</h1>
    <h2>=============</h2>
    <h3>$_GET</h3>
    <h3>$_POST</h3>
    <h3>$_REQUEST</h3>
    <h3>$_FILES</h3>
    <h3>$GLOBALS</h3>
    
    
    <h1>Storage</h1>
    <h2>=======</h2>
    <h3>$_COOKIE</h3>
    <h3>$_SESSION</h3>
-->