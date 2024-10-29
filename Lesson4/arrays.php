<?php
include_once 'functions.php';

$array = [];
$highestNumber = 0;

$array = fillWithNumbers($array);

var_dump($array);
echo "<br>";
echo "<br>";
var_dump(findHigherNumber($array));

//search function for longest row is in Lesson3