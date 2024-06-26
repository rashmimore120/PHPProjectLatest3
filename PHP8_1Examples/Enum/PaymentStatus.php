<?php

declare(strict_types=1);

namespace PHP8_1Examples\Enum;

enum PaymentStatus: int
{
  case PAID = 1;
  case VOID = 2;
  case DECLINED =3 ;

  public function text() :string
  {
    return match($this){
      self::PAID => 'Paid',
      self::VOID => 'Void',
      self::DECLINED => 'Declined',
    };
  }

}