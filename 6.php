<?php
class AsciiFigure
{
    const SIZE = 7;

    static function draw()
    {
        for ($i=0; $i < self::SIZE ; $i++)
        {
            $leftSlashes = str_repeat('/',4*(self::SIZE-$i-1));
            $middle = str_repeat('*',8*$i);
            $rightSlashes = str_repeat('\\',4*(self::SIZE-$i-1));
            echo $leftSlashes.$middle.$rightSlashes.PHP_EOL;
        }
    }
}


 AsciiFigure::draw();