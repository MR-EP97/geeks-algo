<?php

$sortedArr = [-14, -1, -5, 1, 5, 9, 17, 50];
$result = -1;

foreach ($sortedArr as $i => $value) {
    if ($i === $value) {
        $result = $i;
    }
}

if ($result === -1) {
    echo (new Exception('No fixed point found'))->getMessage();
} else {
    echo $result;
}