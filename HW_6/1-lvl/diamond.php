<?php
$handle = fopen("php://stdin","r");
$diamond = fgets($handle);

if($n % 2 == 0){
	echo "четное число";
}
else{
	for($i = 1;$i <= $diamond; $i+=2){
		for($j = 0;$j <= ($diamond-$i)/2; $j++){
			echo ' ';
		}
	echo str_repeat("*", $i);
		for($j = 0;$j <= ($diamond-$i)/2; $j++){
			echo ' ';
		}
	echo "\n";
	}
	for($i = $diamond - 2;$i >=1; $i-=2){
		for($j = 0;$j <= ($diamond-$i)/2; $j++){
			echo ' ';
		}
	echo str_repeat("*", $i);
		for($j = 0;$j <= ($diamond-$i)/2; $j++){
			echo ' ';
		}
	echo "\n";
	}
}
?>