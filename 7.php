<?php


$desiredSum = trim(readline("Desired sum: ")).PHP_EOL;
$calculate = true;
if ($desiredSum > 12){
    echo 'Too large desired sum from 2 rolled dices';
    return $calculate = false;
}
if ($desiredSum < 2){
    echo 'Too small desired sum from 2 rolled dices';
    return $calculate = false;
}

while ($calculate)
{
    $firstDice = rand(1,6);
    $secondDice = rand(1,6);
    $sum = $firstDice+$secondDice;
    if ($sum == $desiredSum)
    {
        echo "$firstDice and $secondDice = $desiredSum".PHP_EOL;
        $calculate = false;
    }
    else
    {
        echo "$firstDice and $secondDice = $sum".PHP_EOL;
    }
}