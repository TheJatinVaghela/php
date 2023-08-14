<?php
echo "function"."<br>";

// we can add return type if we want like this if we dont want we can remove this (: int);
function processmarks($arr): int {
    $sum = 0;
    foreach ($arr as $key => $value) {
        $sum += $value; 
    };
    return $sum;
};

$student = ["rohan","jatin"];
$rohan = [32,56,35,78,54,79,34];
$jatin = [36,59,36,74,57,74,36];

foreach ($student as $key => $name) {
    $sum = processMarks($$name);
    echo "$name's total marks out of 700 is= $sum"."<br>";
}
// $sum = processMarks($rohan);
// $sum = processMarks($jatin);
?>