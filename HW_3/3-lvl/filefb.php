<?php

$file1 = fopen('filefb.txt', 'r+');
$file2 = fopen('file2.txt', 'r+');//file2.txt-путой файл 

function fizzbuzz($fizz, $buzz, $sum){

	for($i = 1; $i <= $sum; $i++){
	$res .= (($i % $fizz == 0) && ($i % $buzz == 0))?"FB ":(($i % $fizz == 0)?"F ":(($i % $buzz == 0)?"B ":$i." "));
	}
	return $res;
}

function readfb($txt, $txt2){

	while (! feof($txt)) {
		$s = fgets($txt);
		$s = explode(" ", $s);
		$f = $s[0];
		$b = $s[1];
		$sum = $s[2];
	$result = fizzbuzz($f, $b, $sum);
	fwrite($txt2, $result.PHP_EOL);
	}
	return true;
}

readfb($file1, $file2);
