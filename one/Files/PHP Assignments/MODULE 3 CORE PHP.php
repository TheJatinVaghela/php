<!--
//01
 Write a PHP program to enter marks of five subjects Physics, Chemistry,  
Biology, Mathematics and Computer, calculate percentage and grade by if 
else write a PHP program for find „Thursday‟ in week using switch 
Function. -->
<?php
/*
$subjects = [["Physics",0],["Chemistry",0],["Biology",0],["Mathematics",0],["Computer",0]];
$total=0;
$percentage;
// print_r($subjects);
 for ($i=0; $i < sizeof($subjects); $i++) { 
     print_r($subjects[$i][0]." add marks ")  ;
     $input = readline();
     $subjects[$i][1]=$input;
     $total += $subjects[$i][1];
 };
$percentage = $total / sizeof($subjects) / 10;
// print_r($subjects);
// print_r($percentage);
if ($percentage >= 8 ) {
    print_r ("A+ grade ".$percentage*10);
}elseif($percentage >= 4 && $percentage < 8 ) {
    print_r ("B+ grade ".$percentage*10);
}elseif($percentage >= 2 && $percentage < 4 ) {
    print_r ("c+ grade ".$percentage*10);
}

echo "write a PHP program for find „Thursday‟ in week using switch Function.";
$weeks = ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
foreach ($weeks as $key => $value) {
    switch ($value) {
          case "Thursday":
            echo "Thursday";
            break;
     }
}
*/

use Random\BrokenRandomEngineError;

?> 

<!-- write a php program to check leap year in bettween 1901 to 2016 -->
<?php
/*
$start = 1901;
$end = 2016;

for ($start; $start <= $end; $start++) {
  if ($start % 4 == 0) {
    if($start % 100 != 0){
         echo "$start is a leap year\n";
    }
  }
}
*/
?>

<!-- Find largest number using ternery oprater -->
<?php
/*
$num = [10,20,30];

foreach ($num as $key => $value) {
    ($value>=max($num))? print_r($value) : print_r("nop");
};
*/
?>

<!-- write a php program  to write  fabonacii series -->
<?php
/*
$n = 9;

$a = 0;
$b = 1;

for ($i = 1; $i < $n; $i++) {
 
  $c = $a + $b;
  
  echo "$c ";

  $a = $b;
  $b = $c;
};
*/
?>

<!-- write a program in php to find that a number is armstrong  or not -->
<?php
/*
function armstrongCheck($number){
    $sum = 0; 
    $x = $number; 
    while($x != 0) 
    { 
        $rem = $x % 10; 
        $sum = $sum + $rem*$rem*$rem; 
        $x = $x / 10; 
    } 
     
    if ($number == $sum)
        return 1;
     
 
    return 0;   
}
 
$number = readline("Enter a number to chack armstrong = ");
$flag = armstrongCheck($number);
if ($flag == 1)
    echo "Yes";
else
    echo "No"
    */
?>

<!-- write a php program  to print the below format
5 9
2 6 10
3 7 11
4 8 12 -->

<?php
/*
$arr = [0,1,2,3,4,5,6,7,8,9,10,11,12];
for ($j=0; $j < 5 ; $j++) { 
    for ($i=$j; $i <count($arr) ; $i+=4) { 
        if ($i==0 ) {
            break;
        }
        echo $arr[$i] . " ";
      
    };
    if($i !== 0){

        echo "\n";
    }
}
*/
?>

<!-- 
    write a php program to print the below format
    * * * *
    *
    *
    *
    * * * *
 -->
 <?php
 /*
 $n = 4;
 for ($I = 0; $I < $n; $I++) {
    
    for ($J = 0; $J < $n; $J++) {
   
        if ($I == 0 || $I == $n - 1  || $J == 0) {
            echo "* ";
        } else {
     
            echo "  ";
        
        }
    }
    echo "\n";
 }
 */
 ?>

 <!-- 
    what will be the value of $a and $b after the code below is exucuted
    $a = "1";
    $b = &$a;
    $b= "2$a"
    answer = $a = "21"; $b = "21"; 
  -->
  <?php
  /*
  $a = "1";
  $b = &$a;
  $b= "2$a";
  echo $a;
  echo $b;
  */
  ?>

  <!-- How can you tell that a number is even odd or even without using any loop or conditions
    answer = % ( reminder oprater ) -->
<?php
/*
    $a = 10;
    $answer = $a % 2;
    echo $answer ." = answer is 0 so that it is even  ";
    */
?>
<!-- how can you declare arry (all type) in php ? explain with examples and convert a json string into an arrey -->
<?php
/*
//There are three types of arrays in PHP: indexed, associative and multidimensional. You can declare an array using the array() function or the [] syntax. For example:

// indexed array
$colors = array("red", "green", "blue");
// or
$colors = ["red", "green", "blue"];

// associative array
$ages = array("Alice" => 25, "Bob" => 30, "Charlie" => 35);
// or
$ages = ["Alice" => 25, "Bob" => 30, "Charlie" => 35];

// multidimensional array
$matrix = array(array(1, 2, 3), array(4, 5, 6), array(7, 8, 9));
// or
$matrix = [[1, 2, 3], [4, 5, 6], [7, 8, 9]];
//Copy
//To convert a JSON string to an array in PHP, you can use the json_decode() function with the second parameter set to true. For example:

$json_string = '{"name":"John","age":20,"gender":"male"}';
$array = json_decode($json_string, true);
*/
?>

<!-- write  a php program to remove duplicate value from an arrey -->
<?php
/*

$arr = array(1, 2, 2, 4, 5, 2, 3, 6, 7, 8);


$arr = array_unique($arr);

print_r($arr);
*/
?>

<!--write  a php program to get rendome value from an arrey -->
<?php
/*
$arr = array("apple", "banana", "cherry", "date", "elderberry");

$key = array_rand($arr);

$value = $arr[$key];

echo $value;
*/
?>

<!-- write a php script  which decods a json string -->
<?php
/*
$json_string = '{"name":"John","age":20,"gender":"male"}';

$decoded = json_decode($json_string);

print_r($decoded);
*/
?>

<!-- use a for loop to total the contents  of an array called  numbers which has five elements and then store the total in an integer called total -->
<?php
/*
$numbers = array(10, 20, 30, 40, 50);

// initialize the total
$total = 0;

for ($i = 0; $i < count($numbers); $i++) {

    $total += $numbers[$i];
}

echo $total;
*/
?>
<!-- declear a multi dimensional  array  of floats called balances having three rows and five columns -->
<?php
/*
$balances = array(
    array(10.5, 20.7, 30.9, 40.3, 50.1),
    array(60.4, 70.6, 80.8, 90.2, 100.0),
    array(110.9, 120.8, 130.7, 140.6, 150.5)
);
*/
?>
