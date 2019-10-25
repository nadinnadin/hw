 <?php

define("LOOP_LIMIT", 100);
$numberOfPrimes = 1000;
    $sum = 2;// сразу запомним двойку,чтобы не шагать по четным
    $numberOfPrimes = $numberOfPrimes - 1;
    $red = 1;
    
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
            echo $num.PHP_EOL;
        }

    $numberOfPrimes = $numberOfPrimes - 1;
    }
echo $sum.PHP_EOL;



