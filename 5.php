<?php


echo 'Welcome to Piglet'.PHP_EOL;

$sum = 0;
while (true)
{
    $dice = rand(1,6);
    if ($dice !== 1 )
    {
        $sum += $dice;
        echo "You rolled a {$dice}!".PHP_EOL;
        if (readline("Roll again? (y) ") === 'y'){
            continue;
        }else{
            echo "You got $sum points.";
            return false;
        }
    } else {
        echo "You rolled a {$dice}!".PHP_EOL;
        echo 'You got 0 points.';
        return false;
    }

}