<?php
echo "Введите интервал".PHP_EOL;
echo "min:".PHP_EOL;
$handle = fopen("php://stdin","r");

$min = fgets($handle);
echo "max:".PHP_EOL;
$max = fgets($handle);
echo "Сколько чисел?".PHP_EOL;
$count = fgets($handle);
echo "------------------".PHP_EOL;
$foo = [];
$foo[0] =rand($min,$max);
while((count($foo)-1)<$count){
	$rand =rand($min,$max);
	if(!in_array($rand, $foo)){
		$foo[] = $rand;
		echo $rand.PHP_EOL;
		$count++;
	}
}

