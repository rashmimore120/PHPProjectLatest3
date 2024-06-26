<?php
declare(strict_types=1);


$array1 = ['a'=>1,'b'=>2,'c'=>3];
$array2 = [4,'b'=>5,6];

$array3 = [...$array1, ...$array2];
print_r($array3);