<?php

$file_array = file("filefb.txt");

function fizzbuzz($fizz,$buzz,$sum){
	$count = "";
	for($i = 1;$i <= $sum; $i++){
		if (($i % $fizz == 0) && ($i % $buzz == 0)){
			$res = "FB ";
		}
		elseif ($i % $buzz == 0){
			$res = "B ";
		}
		elseif ($i % $fizz == 0){
			$res = "F ";
		}
		else $res = $i." ";
		$count.=$res;
	}
	return $count;
}

 function readfb($txt){
	$s = explode(" ", $txt);
	$f = $s[0];
	$b = $s[1];
	$sum = $s[2];

	$result = fizzbuzz($f, $b, $sum);
	echo $result.PHP_EOL;
	return true;
}

array_map('readfb' ,$file_array);



