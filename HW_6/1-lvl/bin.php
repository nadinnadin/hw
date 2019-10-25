<?php

$handle = fopen("php://stdin","r");
$n = fgets($handle);

$bin = decbin($n);
echo $bin.PHP_EOL;
$len = strlen($bin);
if($bin[$len-2] == $bin[$len-3]){
	echo "True".PHP_EOL;
	}
else echo "false".PHP_EOL;