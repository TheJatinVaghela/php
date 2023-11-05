<!-- 1. 
Write a PHP program to enter marks of five subjects Physics, Chemistry, 
Biology, Mathematics and Computer, calculate percentage and grade by if 
else
-->
<?php
$physics = 90;
$chemistry = 85;
$biology = 89;
$mathematics = 95;
$computer = 98;

$total = $physics + $chemistry + $biology + $mathematics + $computer;
$percentage = ($total / 500) * 100;

echo "Percentage: " . $percentage . "%\n";

if($percentage >= 90) {
    echo "Grade: A";
} elseif($percentage >= 80) {
    echo "Grade: B";
} elseif($percentage >= 70) {
    echo "Grade: C";
} elseif($percentage >= 60) {
    echo "Grade: D";
} else {
    echo "Grade: F";
}
?>

<!--2. 
write a PHP program for find „Thursday‟ in week using switch 
Function.
 -->
 <?php
$day = "Thursday";

switch($day) {
    case "Monday":
        echo "Today is Monday";
        break;
    case "Tuesday":
        echo "Today is Tuesday";
        break;
    case "Wednesday":
        echo "Today is Wednesday";
        break;
    case "Thursday":
        echo "Today is Thursday";
        break;
    case "Friday":
        echo "Today is Friday";
        break;
    case "Saturday":
        echo "Today is Saturday";
        break;
    case "Sunday":
        echo "Today is Sunday";
        break;
    default:
        echo "Invalid day";
}
?>

<!--3.
 Write a PHP program to check Leap years between 1901 to 2016 Using 
nested if.
 -->
 <?php
for($year = 1901; $year <= 2016; $year++) {
    if($year % 4 == 0) {
        if($year % 100 == 0) {
            if($year % 400 == 0) {
                echo $year . " is a leap year.\n";
            }
        } else {
            echo $year . " is a leap year.\n";
        }
    }
}
?>

<!-- 4.
Write a PHP program to find the largest of three numbers using ternary 
Operator.
-->
<?php
$num1 = 10;
$num2 = 20;
$num3 = 30;

$max = ($num1 > $num2) ? (($num1 > $num3) ? $num1 : $num3) : (($num2 > $num3) ? $num2 : $num3);

echo "The largest number is: " . $max;
?>

<!-- 5.
Write a program in PHP to print Fibonacci series. 0, 1, 1, 2, 3, 5, 8, 13, 21, 
o 34 
-->
<?php
$num1 = 0;
$num2 = 1;
$counter = 0;

// Fibonacci sequence up to 10 numbers
while ($counter < 10) {
    echo ' '.$num1;
    $num3 = $num2 + $num1;
    $num1 = $num2;
    $num2 = $num3;
    $counter = $counter + 1;
}
?>

<!-- 6.
Write a program to find whether a number is Armstrong or not
-->
<?php
$num = 153;
$sum = 0;
$temp = $num;

while($temp != 0) {
    $remainder = $temp % 10;
    $sum += $remainder * $remainder * $remainder;
    $temp = intval($temp / 10);
}

if($num == $sum) {
    echo $num . " is an Armstrong number.";
} else {
    echo $num . " is not an Armstrong number.";
}
?>

<!--7.
Write a 
program to print the below format : 
5 9 
2610 
3711 
4812 -->
<?php
for($i = 5; $i <= 8; $i++) {
    echo $i . " " . ($i + 4) . "\n";
}
?>

<!-- 8.
Write a program for this Pattern: 
***** 
*
*
*
*****
-->
<?php
for($i = 0; $i < 5; $i++) {
    if($i == 0 || $i == 4) {
        for($j = 0; $j < 5; $j++) {
            echo "*";
        }
    } else {
        echo "*";
    }
    echo "\n";
}
?>
<!-- 9.
What will be the values of $a and $b after the code below is executed? 
Explain your answer. 
$a = '1'; 
$b = &$a; 
$b = "2$b"; 
-->
<!-- both $a and $b will output '21' -->

<!-- 
    How can you tell if a number is even or odd without using any Condition or 
loop?
 -->
 <?php
$num = 3; // Change this to your number
echo $num & 1 ? 'Odd' : 'Even';
?>

<!-- 
How can you declare the array (all type) in PHP? Explain with example 
Covert a JSON string to array.
 -->
<!-- Indexed arrays: Arrays with a numeric index.
Associative arrays: Arrays with named keys.
Multidimensional arrays: Arrays containing one or more arrays. -->
<?php
 $colors = array("Red", "Green", "Blue");  //<!--Indexed arrays:-->
 $ages = array("Peter" => 35, "Ben" => 37, "Joe" => 43);  //<!--Associative arrays:-->
 $cars =  //<!--Multidimensional arrays:-->
 array(  
    array("Volvo", 22, 18),
    array("BMW", 15, 13),
    array("Saab", 5, 2),
    array("Land Rover", 17, 15)
);?>

<!-- 
     Write program to remove duplicate values from array 
 -->
 <?php
$array = array("apple", "banana", "apple", "orange", "banana", "orange", "apple");
$result = array_unique($array);
print_r($result);
?>

<!-- 
    Get random values from array 
 -->
 <?php
$array = array("apple", "banana", "cherry", "orange", "kiwi");
$randomValue = $array[array_rand($array)];
echo $randomValue;
?>

<!-- 
Write a PHP script which decodes the a JSON string.
 -->
 <?php
$json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';

$array = json_decode($json, true);

print_r($array);
?>

<!-- 
Use a for loop to total the contents of an integer array called numbers which 
has five elements. Store the result in an integer called total.
 -->
 <?php
$numbers = array(1, 2, 3, 4, 5);
$total = 0;

for($i = 0; $i < count($numbers); $i++) {
    $total += $numbers[$i];
}

echo "The total is: " . $total;
?>

<!-- 
    Declare a Multi Dimensioned array of floats called balances having Three 
rows and five columns
 -->
 <?php
$balances = array(
    array(1.2, 2.3, 3.4, 4.5, 5.6),
    array(6.7, 7.8, 8.9, 9.1, 10.2),
    array(11.3, 12.4, 13.5, 14.6, 15.7)
);
?>
