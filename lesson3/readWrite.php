<?php
include_once 'functions.php';

$rows = getRows("sonet.txt");

var_dump(writeRows($rows, "cursedSonet.txt"));

var_dump(longestRow($rows));

$midLength = rowsMidLenght($rows);

writeLongerRows($rows, $midLength, 'bigRows.txt');









$allRows = getRows("fizzBuzzThird.txt");

$fizzBuzzRows = array_map(function($row){
    $fizzBuzzParams = explode(' ', $row);
    return fizzBuzz($fizzBuzzParams[0], $fizzBuzzParams[1], $fizzBuzzParams[2]);
}, $allRows);

//foreach ($allRows as $row) {
//    $fizzBuzzParams = explode(' ', $row);
//    $fizzBuzzRows [] = fizzBuzz($fizzBuzzParams[0], $fizzBuzzParams[1], $fizzBuzzParams[2]);
//}

var_dump(writeAllRows($fizzBuzzRows, 'resultsFizzBuzz.txt'));














for($i = 0; $i < count($rows); $i++) {

    echo '<br>Number of letters in the row'.' '.'/'.$rows[$i].'/'.' is '.countLetters($rows[$i]).'<br>';
}