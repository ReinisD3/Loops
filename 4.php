<?php


$number = readline("Max value? ");
$number = (int) $number;
foreach (range(1,$number) as $number)
{
    if (($number-1) % 20 === 0 ) {
        echo PHP_EOL;
    }
    switch ($number)
    {
        case $number % 15 === 0 :
            echo 'FizzBuzz ';
            break;
        case $number % 5 === 0:
            echo 'Buzz ';
            break;
        case $number % 3 === 0 :
            echo "Fizz ";
            break;
        default:
            echo $number." ";

    }
    PHP_EOL;
}