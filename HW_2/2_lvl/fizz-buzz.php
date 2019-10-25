<?php

$handle = fopen("php://stdin","r");
$fizz = fgets($handle);
$buzz = fgets($handle);
$sum = fgets($handle);

$x=1;
	while($x <= $sum){
		if (($x % $fizz == 0) && ($x % $buzz == 0)){
			echo "FB";
		}
		elseif ($x % $buzz == 0){
			echo "B";
		}
		elseif ($x % $fizz == 0){
			echo "F";
		}
		else echo $x;
	echo " ";
	$x++;
	}
?>





