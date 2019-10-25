<?php

$file2 = fopen('file1.txt', 'r+'); //file1.txt-куда записывать
$file_array = file("file.txt");//file.txt-откуда записывать

function by_two($f1,$f2){
	for($i=0;$i<=count($f1);$i+=2){
		fwrite($f2,$f1[$i]);
	}
	return true;
}

by_two($file_array,$file2);
