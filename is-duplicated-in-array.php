<?php 

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 9];

$result = isDuplicete($arr);
echo ;

function isDuplicete(array $arr): bool{
	$finderArr = [];
	foreach ($arr as $value) {
		if (isset($finderArr[$value])) {
			return true;
		}	
		$finderArr[$value] = 1;
	}
	return false;
}