<?php

$file1 = fopen('filefb.txt', 'r+');
$file2 = fopen('file2.txt', 'r+');//file2.txt-путой файл 

function fizzbuzz($fizz,$buzz,$sum){

	$count = "";
	for($i = 1;$i <= $sum; $i++){
		if (($i % $fizz==0) && ($i % $buzz==0)){
			$res = "FB ";
		}
		elseif ($i % $buzz==0){
			$res = "B ";
		}
		elseif ($i % $fizz==0){
			$res = "F ";
		}
		else $res = $i." ";
		$count.=$res;
	}
	return $count;
}

function readfb($txt,$txt2){

	while (! feof($txt)) {
		$s = fgets($txt);
		$s = explode(" ", $s);
		$f = $s[0];
		$b = $s[1];
		$sum = $s[2];
	$result = fizzbuzz($f,$b,$sum);
	fwrite($txt2,$result.PHP_EOL);
	}
	return true;
}

readfb($file1,$file2);
