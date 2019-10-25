<?php

$file = fopen('file1.txt', 'r+');//file1.txt-путой файл 
$file_array = file("filehw.txt");//filehw.txt-файл с содержимым


 function by_two($f1){
 	global $arr;
 	$arr = [];
 	foreach ($f1 as $value){
 		$value = strlen(trim($value));
 		$arr[] = $value;
 	}return true;
}

 function by_ave($f1){
 	foreach ($f1 as $value){
 		$sum+=$value;
 	}
 	$average=$sum/count($f1);
 	return $average;
 }

function by_write($f1,$f2,$f3,$f){
	for($i=0;$i<=count($f1);$i++){
		if($f1[$i] > $f){
			fwrite($f2,$f3[$i]);
		}
	}return true;
}

 	
by_two($file_array);
$ave = by_ave($arr);
by_write($arr,$file,$file_array,$ave);
