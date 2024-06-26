<?php
declare(strict_types=1);
use PHP8_1Examples\ReadOnlyProperty\Address;
require_once __DIR__ . '/../../vendor/autoload.php';

$address = new Address(
  '123 Main St',
  'New York',
  'NY',
  '10011',
  'US'
);
echo $address->street . PHP_EOL;