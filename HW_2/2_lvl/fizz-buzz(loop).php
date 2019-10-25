<?php

$handle = fopen("php://stdin","r");
$fizz = fgets($handle);
$buzz = fgets($handle);
$sum = fgets($handle);

	for($i=1;$i<=$sum;$i++){
		if (($i % $fizz==0) && ($i % $buzz==0)){
			echo "FB ";
		}
		elseif ($i % $buzz==0){
			echo "B ";
		}
		elseif ($i % $fizz==0){
			echo "F ";
		}
		else echo $i." ";
	}
?>