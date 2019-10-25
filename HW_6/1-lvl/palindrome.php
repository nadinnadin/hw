 <?php

define("LOOP_LIMIT", 100);
$numberOfPrimes = 10000;
    $numberOfPrimes = $numberOfPrimes - 1;
    $red = 0;//содержит количество простых переменных для нахождения палиндрома 
    $max = 0;//в переменную записываем наибольший палиндром 
    
    for ($num = 3; $num <= $numberOfPrimes; $num += 2) {
        if ($red == LOOP_LIMIT) {
            break; 
       }

        $isPrime = true;

        for ($prevNum = 2; $prevNum < $num; ++$prevNum) {
            if ($num % $prevNum == 0) {
                $isPrime = false;
                break;
            }
        }

        if ($isPrime == true) {
            $red++;
            $mun = strrev($num);
            if($num == $mun){
                if($num>$max){
                   $max = $num; 
                }
            }   
        }

    $numberOfPrimes = $numberOfPrimes - 1;
    }
echo $max.PHP_EOL;



