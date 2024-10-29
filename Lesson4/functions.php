<?php

function fillWithNumbers($array){
    for($i = 0; $i < 100; $i++){
            $array[] = random_int(0, 10000);
    }
    return $array;
}

function findHigherNumber($array){
    $highestNumber = 0;
    for($i = 0; $i < count($array); $i++){
        if($array[$i] > $highestNumber){
            $highestNumber = $array[$i];
        }
    }
    return $highestNumber;
}
