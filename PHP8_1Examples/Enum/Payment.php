<?php
declare(strict_types=1);

namespace PHP8_1Examples\Enum;

class Payment
{
  private PaymentStatus $status;
  public function updateStatus(PaymentStatus $status): Payment
  {
    $this->status = $status; 
    return $this;
  }
  public function status():PaymentStatus
  {
    return $this->status;
  }
}