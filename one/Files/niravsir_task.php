<?php 
echo "start\n";

// Input:153
// Output: Yes
// 153 is an Armstrong number.
// 1*1*1 + 5*5*5 + 3*3*3 = 153

// Input: 120
// Output: No
// 120 is not a Armstrong number.
// 1*1*1 + 2*2*2 + 0*0*0 = 9

// Input: 1253
// Output: No
// 1253 is not a Armstrong Number
// 1*1*1*1 + 2*2*2*2 + 5*5*5*5 + 3*3*3*3 = 723


$int1 = 0;//1//2//3//5
$int2 = 1;//1//2//3
for ($i=0; $i <1000 ; $i++) {
    $int3 = $int1;//0//1//2//3
    $int1 = $int1+$int2;
    if($int2 < $int3){
        $int2 = $int3;
    }
    echo"\n".$int1;
}

?>