<?php 

$mass = ['4444','1','55555','22'];
$mass1 = ['22',true,'1'];

function simile($x,$y){
	//выбрасываем исключения
	//проверяем наличиие элементов в массиве 
	if(count($x) < 3){
		throw new Exception('В первом массиве меньше трех элементов.');
	}
	if(count($y) < 3){
		throw new Exception('Во втором массиве меньше трех элементов.');
	}
	$max = 0;//$max - содержит максимальное значение разниц длин, изначально равна 0  
	for($i=0; $i<3; $i++){
		//выбрасываем исключения 
		//валидация входных данных 
		if(!is_string($x[$i])){
			throw new Exception('Элемент первого массива не является строкой.');
		}
		if(!is_string($y[$i])){
			throw new Exception('Элемент второго массива не является строкой.');
		}
	$len = strlen($x[$i]);//длина элемента массива №1
	$len1 = strlen($y[$i]);//длина элемента массива №2
	$odds = abs($len - $len1);//разница длин 
		if($odds > $max){
			$max = $odds;
		}
	}
	echo $max.PHP_EOL;
	return true;
}
//перехватываем исключение 
try{
	simile($mass,$mass1);
}
catch(Exception $e){
	echo 'Выброшено исключение: ',  $e->getMessage(), "\n";
}