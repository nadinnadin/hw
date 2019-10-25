<?php 

define("DIVIDER",5);

for($i = 1;$i <= 100;$i++){
	if($i % DIVIDER == 0){
		echo $i . PHP_EOL;
	}
}