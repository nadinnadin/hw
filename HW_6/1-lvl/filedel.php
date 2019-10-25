<?php

$txt = fopen('filedel.txt', 'r+');
	while (! feof($txt)) {
		$s = fgets($txt);
		$s = explode(";", $s);
		$per = explode(" ", $s[0]);
		$sum = 0;
		for($i=0;$i<count($per);$i++){
			$sum +=$per[$i];
		}
		$res = intval($sum/count($per));
		$res2 = $sum % count($per);
		$result = explode(" ", $s[1]);
		
		if ($result[0] == $res && $result[1] == $res2){
			echo "True".PHP_EOL;
		}
		else echo "False".PHP_EOL;
	}
