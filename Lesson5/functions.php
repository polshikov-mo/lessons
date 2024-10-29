<?php

function devideByFive($const){
    $a = 0;
    for($i = 0; $i < 101; $i++){
        if($i % $const == 0){
            $a = $a + 1;
        }
    }
    return $a;
}

function simpleNumbersSum($const){
    $num = 1;
    $sum = 1;
    $lim = 0;
    do{
        $num++;
        for($i = 2; $i < $num; $i++){
            if($num % $i == 0){
                continue 2;
            }else{
                $sum += $num;
                $lim += 1;
            }
        }
    }while($lim <= $const);
    return $sum;
}

//цикл в цикле
function erastophenMethod($limiter){
    $arr = range(2, $limiter);

    foreach ($arr as $key => $value) {
        if(($value % $arr[0] == 0)){
            unset($arr[$key]);

        }
    }
    return $arr;
}

//Вход: натуральное число n
//Выход: все простые числа от 2 до n.
//
//Пусть A — булевый массив, индексируемый числами от 2 до n,
//изначально заполненный значениями true.
//
// для i = 2, 3, 4, ..., пока i2 ≤ n:
//  если A[i] = true:
//    для j = i2, i2 + i, i2 + 2i, ..., пока j ≤ n:
//      назначить A[j] := false
//
// возвращаем: все числа i, для которых A[i] = true.