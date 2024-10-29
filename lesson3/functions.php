<?php

function getRows($fileName){
    $file = fopen($fileName, 'r');
    $lines = file($fileName);
    $linesAmount = count($lines);
    $rows = [];
    for ($i = 0; $i < $linesAmount; $i++) {
        $rows[] = fgets($file);
    }
    fclose($file);
    return $rows;
}

function longestRow($rows){
    $a = 0;
    for($i = 0; $i < count($rows); $i++){
        if(strlen($rows[$i]) > $a){
            $a = strlen($rows[$i]);
        }
    }
    return $a;
}

function countLetters($string){
    $string = preg_replace( "/[^a-zA-Z\s+]/", '', $string );
    $string = preg_replace( '/\s+/', '', $string );
    var_dump($string);
    return strlen($string);
}

function rowsMidLenght($rows){
    $a = 0;
    for($i = 0; $i < count($rows); $i++){
        $a += strlen($rows[$i]);
    }
    $midLength = $a/count($rows);
    return $midLength;
}

function writeLongerRows($rows, $midLength, $fileName){
    $file = fopen($fileName, 'w');
    for($i = 0; $i < count($rows); $i++){
        if(strlen($rows[$i]) > $midLength){
            fwrite($file, $rows[$i]);
        }
    }
    fclose($file);
    return 'Success<br>';
}

function writeRows($rows, $fileName) {
    $file = fopen($fileName, 'w');
    for($i = 0; $i < count($rows); $i+=2) {
        fwrite($file, $rows[$i]);
    }
    fclose($file);
    return 'Success';
}

function writeAllRows($rows, $fileName) {
    $file = fopen($fileName, 'w+');
    for($i = 0; $i < count($rows); $i++) {
        fwrite($file, $rows[$i]);
    }
    fclose($file);
    return 'Success';
}

function fizzBuzz($fizz, $buzz, $limit){
    $line = '';
    for($i = 1; $i <= $limit; $i++) {
        if($i % $fizz == 0 && $i % $buzz == 0) {
            $line .= "FB";
        }elseif($i % $fizz == 0) {
            $line .= "F";
        }elseif($i % $buzz == 0) {
            $line .= "B";
        }else {
            $line .= $i;
        }
    }
    return $line .= PHP_EOL;
}