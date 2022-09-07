<?php

// bubble sorting algorithem
function sortMe($arr = []){
    $n = count($arr);
    for ($i = 0; $i < $n-1; $i++) {
        for ($j = 0; $j < $n-1-$i; $j++) {
            if($arr[$j] > $arr[$j+1]){
                $tmp = $arr[$j];
                $arr[$j] = $arr[$j+1];
                $arr[$j+1] = $tmp;
            }
        }
    }
    return $arr;
}

// $arr = sortMe([5,1,25,6,33,100,9,7,2,3]);
// print_r($arr);


// fibonacci series
function fibonacci(int $elements){
    $arr = [0,1];
    for ($i = 0; $i < $elements-2; $i++) {
        $arr[] = $arr[$i] + $arr[$i+1];
    }
    $arr =  implode(',',$arr);
    return $arr;
}


// 0, 1, 1,2,3,5,8,13,21

$fibonacciser = fibonacci(12);
print_r($fibonacciser);

