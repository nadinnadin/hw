<?php
$arraystr = ["cgcccgcc","uhh","lllnccc","jj","mmfffmmm"];
function quantity($mass){
	for($i = 0;$i <= strlen($mass)-1;$i++){
		$quantity = substr_count($mass,$mass[$i]);
		$col[$mass[$i]] = $quantity;
	}
	var_dump($col);
	return true;
}

array_map('quantity', $arraystr);
