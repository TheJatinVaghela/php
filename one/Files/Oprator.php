<?php
echo "oprator";
echo "<br>";


/* Operators in PHP
1. Arithmetic Operators
2. Assignment Operators
3. Comparison Operators 
4. Logical Operators
*/

$a = 45;
$b = 8;

// 1. Arithmetic Operators
echo "For a + b, the result is ". ($a + $b) . "<br>";
echo "For a - b, the result is ". ($a - $b) . "<br>";
echo "For a * b, the result is ". ($a * $b) . "<br>";
echo "For a / b, the result is ". ($a / $b) . "<br>";
echo "For a % b, the result is ". ($a % $b) . "<br>";
echo "For a ** b, the result is ". ($a ** $b) . "<br>";
 
// 2. Assignment Operators
// $x = $a;
// echo "For x, the value is ". $x . "<br>";

// $a += 6;
// echo "For a, the value is ". $a . "<br>";

// $a -= 6;
// echo "For a, the value is ". $a . "<br>";

// $a *= 6;
// echo "For a, the value is ". $a . "<br>";

// $a /= 5;
// echo "For a, the value is ". $a . "<br>";

// $a %= 5; // $a = $a % 5
// echo "For a, the value is ". $a . "<br>";


// 3. Comparison Operators 
$x = 78;
$y = 78;

// echo "For x > y, the result is ";
// echo var_dump($x > $y);

// echo "For x > y, the result is ";
// echo var_dump($x >= $y);

// echo "For x < y, the result is ";
// echo var_dump($x < $y);

// echo "For x < y, the result is ";
// echo var_dump($x <= $y);

echo "For x <> y, the result is "; 
echo var_dump($x <> $y);
echo "<br>";

// Devloper Option 
$name = ["Name1","Name2","Name3",1,2,3,true,false];
echo "<pre>";
print_r($name);
var_dump($name);
var_export($name);
echo "</pre>";



// 4. Logical Operators

$m = true;
$n = true;

echo "For m and n, the result is "; 
echo var_dump($m and $n);
echo "<br>";

echo "For m && n, the result is "; 
echo var_dump($m && $n);
echo "<br>";

echo "For m or n, the result is "; 
echo var_dump($m or $n);
echo "<br>";

echo "For m || n, the result is "; 
echo var_dump($m || $n);
echo "<br>";

echo "For !m , the result is "; 
echo var_dump(!$m);
echo "<br>";

//if else

$age  = 30;
if($age>25 && $age<65){
    echo "You can drive"."<br>";
}else{
    echo "You can  not drive "."<br>";
}

// switch 

$age = 56;

switch($age){
    case 12:
        echo "You are 12 years old <br>";
        break;

    case 45:
        echo "You are 45 years old <br>";
        break;

    case 56:
        echo "You are 56 years old boy <br>";
        break;
    
    default:
        echo "Your age is weird <br>";
        break;

};

// Loops 

echo "While loop"."<br>";
//while loop
$i = 0;
while($i<5){
    echo "value of i is = $i","<br>";
    $i++;
};

echo "for loop"."<br>";
//for loop 
for ($i=0; $i < 5; $i++) { 
    echo "Value of i is = $i"."<br>";
}

//do while loop
echo "Do  while loop"."<br>";
$a = 0;
do {
    echo "value of i is = $a"."<br>";
    $a++;
} while ($a < 5);

//foreach
echo "foreach"."<br>";
$cart = ["banana","apple","harpic","bread"];
foreach ($cart as $key => $value) {
    echo $value ."=".$key ."<br>";
}
?>