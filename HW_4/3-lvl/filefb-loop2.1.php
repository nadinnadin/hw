<?php

$file2 = fopen('file2.txt', 'r+');
$file_array = file("filefb.txt");

$readfb = function($txt) use ($file2){

	$s = explode(" ", $txt);
	$fizz = $s[0];
	$buzz = $s[1];
	$sum = range(1, $s[2]);

	$fizzbuzz = function($i) use ($fizz,$buzz){
		$str =(($i % $fizz == 0) && ($i % $buzz == 0))?"FB ":(($i % $fizz == 0)?"F ":(($i % $buzz == 0)?"B ":$i." "));
		return $str;
	};

	$result2 = implode("", array_map($fizzbuzz, $sum));
	fwrite($file2, $result2.PHP_EOL);
	
	return true;
};

array_map($readfb, $file_array);



