<?php

$min = readline("Enter Min: ");
$max = readline('Enter Max: ');

class NumberSquared
{
    public int $max ;
    public int $min;
    public array $range;

    function __construct($min,$max)
    {
        $this->max = $max;
        $this->min = $min;
        $this->range = range($min,$max);

        for ($i=0 ; $i < count($this->range); $i++)
        {
            foreach ($this->range as $elem)
            {
                echo $elem;
            }
            array_push($this->range,array_shift($this->range));
            echo PHP_EOL;
        }
    }

}
$number = new NumberSquared($min,$max);