<?php


$number = readline("Enter number to multiply ");
PHP_EOL;
$n = readline("Enter times to multiply the number : ");
PHP_EOL;
$number = (int) $number;
$sum = 1;
for ($i = 0; $i < $n; $i++)
{
    $sum = $sum*$number ;
}
echo 'Sum is: '.$sum.PHP_EOL;



//todo complete loop to multiply i with itself n times, it is NOT allowed to use built-in pow() function