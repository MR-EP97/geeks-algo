<?php

$arr = [12, 82, 34, 0, 6, 40, 5, -5 , 46, 420, 1, 23];

$max_number_1 = $max_number_2 = PHP_INT_MIN;
$len = count($arr);
$maxes = [];

for ($i = 0; $i < $len; $i++) {
    
    if($arr[$i] > $max_number_1){

        // save second max
        $max_number_2 = $max_number_1;

        $max_number_1 = $arr[$i];

    }elseif($arr[$i] > $max_number_2){

        $max_number_2 = $arr[$i];

    }
    
}

echo $max_number_1 + $max_number_2 ;