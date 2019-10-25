<?php
$arrayint = [1,4,2,6,3,8,3,44,7,24,5,2,7,34];
function greatest($mass){	
	$max = $mass[0];
	for($i = 0;$i <= count($mass);$i++){
		if($mass[$i] > $max){
			$max = $mass[$i];
		}
	}
	echo $max;	
	return true;
}
greatest($arrayint);


