<?php

declare(strict_types=1);
namespace App\Attributes;
use Attribute;
use App\Contracts\RouteInterface;
use App\Enums\HttpMethod;

#[Attribute(Attribute::TARGET_METHOD|Attribute::IS_REPEATABLE)]
class Route implements RouteInterface
{
  public function __construct(public string $routePath, public HttpMethod $method=HttpMethod::Get)
  {
    
  }
}