<?php
$arraystr = ["dtfgjhk","uhh","vylgcgccccc","j","kjhvlkjhglkjmbmnb"];
function len($mass){	
	$lenarray = array_map('strlen', $mass);
	$max = $lenarray[0];
	for($i = 0;$i <= count($lenarray);$i++){
		if($lenarray[$i]>$max){
			$max = $lenarray[$i];
			$str = $i;
		}
	} echo $mass[$str];
	return true;
}
len($arraystr);
