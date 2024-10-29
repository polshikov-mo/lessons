<?php

function searchFlatFloor($flat, $floor = 9, $flatAmount = 4)
{
    $floorNumber = ceil($flat / $flatAmount);
    $enterNumber = ceil($floorNumber / $floor);
    $currentFloor = $floorNumber % $floor;
    echo("Floor number $currentFloor, enterance number $enterNumber");
}

function drawDiamond($number)
{
    if ($number <= 0) {
        echo('Number must be greater than 0');
        return;
    } elseif ($number % 2 === 0) {
        echo('Число должно быть не четным');
        return;
    }

    $arr = array_fill(1, $number, '');
    $starsCount = 1;
    for ($i = 1; $i <= $number; $i++) {
        $line = '';
        $spaceAmount = $number - $starsCount;
        $spaceBySide = $spaceAmount / 2;
        $line .= str_repeat('&nbsp;', $spaceBySide);
        $line .= str_repeat('*', $starsCount);
        $arr[$i] = $line;
        if ($i < ceil($number / 2)) {
            $starsCount += 2;
        } else {
            $starsCount -= 2;
        }
    }
    echo(implode('<br>', $arr));

}