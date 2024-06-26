<?php

declare(strict_types=1);
namespace App;

class Invoice 
{
  public function __construct(protected SalesTaxCalculator $salesTaxCalculator)
  {
    
  }
  
  public function create(array $lineItems)
  {
    $lineItemsTotal = $this->calculateLineItemsTotal($lineItems);

    $salesTax = $this->salesTaxCalculator->calculate($lineItemsTotal);
    $total = $lineItemsTotal + $salesTax;
    echo 'Sub Total: $' . $lineItemsTotal . PHP_EOL .
         'Sales Tax: $' . $salesTax . PHP_EOL .
         'Total: $' . $total . PHP_EOL;
  }

  public function calculateLineItemsTotal(array $items): float|int
  {
    return array_sum(array_map(fn($item)=> $item['unitPrice'] * $item['quantity'], $items));
  }
  
  
}