<?php

$word = trim(readline("Enter first word:"));
PHP_EOL;
$secondWord = trim(readline("Enter second word:"));
PHP_EOL;

$totalLength = 30;
$dots = '';
$dots .= str_repeat('.',$totalLength-strlen($word)-strlen($secondWord));

echo $word.$dots.$secondWord;
