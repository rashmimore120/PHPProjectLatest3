<?php
declare(strict_types=1);
namespace App\Enums;

enum Color:string
{
  case Green = 'green';
  case Red = 'red';
  case Grey = 'grey';
  case Orange = 'orange';

  public function getClass(): string
  {
    return 'color-' . $this->value;
  }
}


