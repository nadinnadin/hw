<?php

$file2 = fopen('file1.txt', 'r+');//file1.txt-куда записывать
$file = fopen('file.txt', 'r+');//file.txt-откуда записывать
 
function by_two($f1,$f2){
	
	while(! feof($f1)){
		$s = fgets($f1);
		fwrite($f2,$s);
		$s = fgets($f1);	
	}
	return true;
}

by_two($file,$file2);
