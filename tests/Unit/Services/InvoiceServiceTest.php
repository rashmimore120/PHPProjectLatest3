<?php
declare(strict_types= 1);
namespace Tests\Unit\Services;
use App\Services\InvoiceService;
use App\Services\SalesTaxService;
use App\Services\PaymentGatewayService;
use App\Services\EmailService;
use PHPUnit\Framework\TestCase;

class InvoiceServiceTest extends TestCase
{
  /** @test */
  public function it_processes_invoice():void
  {

    $salesTaxServiceMock  = $this->createMock(SalesTaxService::class);
    $gatewayServiceMock       = $this->createMock(PaymentGatewayService::class);
    $emailServiceMock         = $this->createMock(EmailService::class);

   $gatewayServiceMock->method('charge')->willReturn(true);

    //given invoice service
    $invoiceService = new InvoiceService(
      $salesTaxServiceMock,
      $gatewayServiceMock, 
      $emailServiceMock
    );
    //when process is called
    $customer = ['name'=>'Rashmi'];
    $amount = 150;
    $result=$invoiceService->process($customer, $amount);
    //then assert invoice is processed sucessfully
    $this->assertTrue($result);
  }

  /** @test */
  public function it_sends_receipt_email_when_invoice_is_processed() :void
  {
    $customer = ['name'=>'Rashmi'];
    $salesTaxServiceMock  = $this->createMock(SalesTaxService::class);
    $gatewayServiceMock   = $this->createMock(PaymentGatewayService::class);
    $emailServiceMock     = $this->createMock(EmailService::class);

   $gatewayServiceMock->method('charge')->willReturn(true);

   $emailServiceMock->expects($this->once())->method('send')->with($customer, 'receipt');

    //given invoice service
    $invoiceService = new InvoiceService(
      $salesTaxServiceMock,
      $gatewayServiceMock, 
      $emailServiceMock
    );
    
    $amount = 150;
    $result=$invoiceService->process($customer, $amount);
    //then assert invoice is processed sucessfully
    $this->assertTrue($result);
  }
}