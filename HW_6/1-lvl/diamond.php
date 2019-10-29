<?php
$handle = fopen("php://stdin","r");
$n = fgets($handle);

if($n % 2 == 0){
	echo "четное число";
}
else{
	for($i = 1;$i <= $n; $i+=2){
		for($j = 0;$j <= ($n-$i)/2; $j++){
			echo ' ';
		}
	echo str_repeat("*", $i);
		for($j = 0;$j <= ($n-$i)/2; $j++){
			echo ' ';
		}
	echo "\n";
	}
	for($i = $n - 2;$i >=1; $i-=2){
		for($j = 0;$j <= ($n-$i)/2; $j++){
			echo ' ';
		}
	echo str_repeat("*", $i);
		for($j = 0;$j <= ($n-$i)/2; $j++){
			echo ' ';
		}
	echo "\n";
	}
}
?>