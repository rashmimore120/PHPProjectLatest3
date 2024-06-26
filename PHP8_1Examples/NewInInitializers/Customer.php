<?php
declare(strict_types=1);
namespace PHP8_1Examples\NewInInitializers;


class Customer
{
  public function __construct(public Address $address = new Address())
  {
    
  }
}
