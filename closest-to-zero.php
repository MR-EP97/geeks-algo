<?php

// Implement closestTozero function to return the integer in the array $ints that is closest to zero If 
// there are two integers equally close to zero consider the positive element to be closer to zero
// (example: if $ints contains -5 and 5 return 5) If $ints is empty, return 0
// Input: integers in $ints have values ranging from -2147483647 to 2147483647

$array = [-12, -8,-2,-1, 2, 9, 25];
$r = 2147483647;

foreach ($array as $iValue) {
    $a = abs($iValue);

    if ($a < abs($r)) {
        $r = $iValue;
    }
    if ($a === abs($r) && $iValue > 0) {
        $r = $iValue;
    }
}
return $r;