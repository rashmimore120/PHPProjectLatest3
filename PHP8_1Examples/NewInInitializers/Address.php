<?php
declare(strict_types=1);
namespace PHP8_1Examples\NewInInitializers;
class Address
{
  public function __construct()
  {
    var_dump('Hello');
  }
}