<?php
declare(strict_types=1);

function sum(float ...$num):float
{
  return array_sum($num);
}
//$closure = Closure::fromCallable('sum');
$closure = sum(...);

var_dump($closure);
echo $closure(2,5) . PHP_EOL;