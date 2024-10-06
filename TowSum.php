<?php

// input :   nums = [2, 7, 11, 15], target = 9
// output : [0, 1]
// 2 + 7 = 9



function findTowSum($nums, $target){
    foreach ($nums as $i => $num) {
        $a = $target - $num;
        if(isset($com[$a])){
            return [$num, $a];
        }
        $com[$num] = $a;  
    }
    return 'non';
}


$nums = [1, 2, 3, 4, 5];
$target = 9;



$result = findTowSum($nums, $target);
var_dump($result);
