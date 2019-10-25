<?php

$handle = fopen("php://stdin","r");
$fizz = fgets($handle);
$buzz = fgets($handle);
$sum = fgets($handle);

	for($i=1;$i<=$sum;$i++){
	echo (($i % $fizz == 0) && ($i % $buzz == 0))?"FB ":(($i % $fizz == 0)?"F ":(($i % $buzz == 0)?"B ":$i." "));
	}
?>





