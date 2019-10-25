<?php 

$mass = ['4444','1','55555'];
$mass1 = ['22','7777777','333','999999999'];
function simile($x,$y){
	$max = 0;
	for($i=0;$i<3;$i++){
		$len = strlen($x[$i]);
		$len1 = strlen($y[$i]);
		$odds = abs($len-$len1);
		if($odds>$max){
			$max = $odds;
		}
	}
	echo $max.PHP_EOL;
	return true;
}

simile($mass,$mass1);