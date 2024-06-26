<?php
declare(strict_types=1);
use PHP8_1Examples\Enum\Payment;
use PHP8_1Examples\Enum\PaymentStatus;

require_once __DIR__ . '/../../vendor/autoload.php';

$payment = new Payment();

$payment->updateStatus(PaymentStatus::PAID);
echo $payment->status()->value . PHP_EOL;

