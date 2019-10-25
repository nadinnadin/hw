<?php
$handle = fopen("php://stdin","r");
$n = fgets($handle);

if($n % 2 == 0){
	echo "четное число";
}
else{
	for($i = 1;$i <= $n; $i+=2){
		echo str_repeat(" ", ($n-$i)/2);
		echo str_repeat("*", $i);
		echo str_repeat(" ", ($n-$i)/2);
	echo "\n";
	}
	for($i = $n - 2;$i >=1; $i-=2){
		echo str_repeat(" ", ($n-$i)/2);
		echo str_repeat("*", $i);
		echo str_repeat(" ", ($n-$i)/2);
	echo "\n";
	}
}
?>