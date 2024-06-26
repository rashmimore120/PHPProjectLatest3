<?php

declare(strict_types=1);
namespace App\Enums;
use App\Contracts\SomeInterface;

enum InvoiceStatus: int implements SomeInterface
{
  use InvoiceStatusHelper;
  case Pending =0;
  case Paid =1;
  case Void =2;
  case Failed =3;
  
  public function toString(): string
  {
    return match($this)
    {
      self::Paid => 'Paid',
      self::Failed => 'Declined',
      self::Void => 'Void',
      default => 'Pending'
    };
  }

  public function color(): Color
  {
    return match($this)
    {
      self::Paid => Color::Green,
      self::Failed => Color::Red,
      self::Void => Color::Grey,
      default => Color::Orange
    };
  }

  
}