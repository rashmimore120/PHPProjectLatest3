<?php
declare(strict_types=1);
use PHP8_1Examples\NewInInitializers\Address;
use PHP8_1Examples\NewInInitializers\Customer;

require_once __DIR__ . '/../../vendor/autoload.php';

$customer = new Customer(new Address());
var_dump($customer->address);