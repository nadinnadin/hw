<?php
function sumEven($arr, $index=0, $sum=0){

    if (count($arr) === $index +1){
        return $sum;
    }
    $sum += ($arr[$index] % 2 == 0)? $arr[$index]:0;
    return sumEven($arr, ++$index, $sum);
}
echo sumEven([2,1,4,8,3,6,9]) . PHP_EOL;
