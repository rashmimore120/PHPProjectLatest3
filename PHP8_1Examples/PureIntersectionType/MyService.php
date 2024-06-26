<?php

declare(strict_types=1);
namespace PHP8_1Examples\PureIntersectionType;

class MyService
{
  public function __construct(private Syncable | Payable $entity)
  {
    
  }
  public function handle()
  {
    $this->entity->pay();
    $this->entity->sync();
  }
}