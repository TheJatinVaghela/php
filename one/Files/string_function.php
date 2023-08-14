
<?php
$name = "jatin";
$sername = 'Vaghela';
$age = 20;
$heath = false;
$arry = [1,"2",'3',false,true];
echo $name." ".$sername." "."Age" . " = ". $age . " " . "Health" . " " . " = ";
echo var_dump($heath);

echo "<br>";
echo var_dump($arry[0]);
echo "<br>";
echo var_dump($arry[1]);
echo "<br>";
echo var_dump($arry[2]);
echo "<br>";
echo var_dump($arry[3]);
echo "<br>";
echo var_dump($arry[4]);
echo "<br>";

echo "Lenth of name is = ".strlen($name);
echo "<br>";
echo "the word count of name + sername is =  ".str_word_count($name." ".$sername);
echo "<br>";
$intro = "Hii My Name Is jatin";
echo "the word count of intro is = ".str_word_count($intro);

echo "<br>";
echo "the Reverse Of name($name) is = ".strrev($name);
echo "<br>";

echo "strpos to find in which number the string is stored in the given string like  ( Is ) in ( $intro ) = ".strpos($intro,"Is");
echo "<br>";

echo "str_replace use to relace somthing in string with somthing ex( replace jatin with mona in $intro ) = ".str_replace("jatin","mona",$intro);
echo "<br>";

echo "str_repeat to repeat any string ".str_repeat($name."<br>",5);
echo "<br>";

//<pre></pre> to as it render string to web page like ex(<pre>     jatin      </pre>) this will be on page like (     jatin      ) ;
// why use <pre></pre> pre forcees html to render string with as it is it  wont let html to remove emty spaces if we dont use pre html will 
// remove emty spaces 
 $name = "      jatin      ";
echo "using pre tage = "."<pre>$name</pre>";
echo "Not using pre tage = "."$name";  
echo "<br>";

echo "<pre>";
echo "ltrim to trim string from left = ".ltrim($name);
echo "</pre>";
echo "<br>";

echo "<pre>";
echo "rtrim to trim string from right = ".rtrim($name);
echo "</pre>";
echo "<br>";
?>