<?php
declare(strict_types=1);
namespace App\Enums;

trait InvoiceStatusHelper
{
  public static function fromColor(Color $color):InvoiceStatus
  {
    return match($color) {
      Color::Green => self::Paid,
      Color::Grey => self::Void,
      Color::Red => self::Failed,
      default => self::Pending
    };
  }
}