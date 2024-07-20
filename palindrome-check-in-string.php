<?php

function isPalindrome($string) {
    $len = strlen($string);
    for ($j = 0; $j < $len / 2; $j++) {
        if ($string[$j] !== $string[$len - ($j + 1)]) {
            return 'no';
        }
    }
    return 'yes';
}

$string = 'ab c ba';

echo isPalindrome($string);

   