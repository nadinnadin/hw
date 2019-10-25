 <?php
 $start = microtime(true);
define("LOOP_LIMIT", 100);
$numberOfPrimes = 1000;
    $sum = 2;// сразу запомним двойку,чтобы не шагать по четным
    $numberOfPrimes = $numberOfPrimes - 1;
    $red = 1;//red - содержит количество найденных простых чисел 
             //1 так как число 2 уже найдено 
    
    for ($num = 3; $num <= $numberOfPrimes; $num += 2) {
        if ($red == LOOP_LIMIT) {
            break; // нашли все простые числа, дальше не идем
        }

        $isPrime = true;

        for ($prevNum = 2; $prevNum < $num; ++$prevNum) {
            if ($num % $prevNum == 0) {
                $isPrime = false;
                break;
            }
        }
        if ($isPrime == true) {
            $sum += $num;
            $red++;
        }

    $numberOfPrimes = $numberOfPrimes - 1;
    }
echo $sum.PHP_EOL;
echo 'Время выполнения скрипта: '.round(microtime(true) - $start, 4).' сек.'.PHP_EOL;


$start2 = microtime(true);
$arr = array_fill( 0, $numberOfPrimes+1 , true);
    $arr[0] = false;
    $arr[1] = false;//1 и 0 составные
    $sum = 0;
    $red = 0;//red - содержит количество найденных простых чисел 
    
 for ($num = 2; $num <= $numberOfPrimes; $num++) {
     if ($red == LOOP_LIMIT) {
        break; 
    }   
    if ($arr[$num] == true) {
        $numberOfPrimes = $numberOfPrimes - 1;
        $sum += $num;
        $red++;
        $numSqr = $num**2;
        if ($numSqr <= $numberOfPrimes) {
            for(;$numSqr <= $numberOfPrimes;$numSqr += $num ){
                $arr[$numSqr] = false;
            }  
        }
    }
}
echo $sum.PHP_EOL;
echo 'Время выполнения скрипта (метод решета): '.round(microtime(true) - $start2, 4).' сек.';