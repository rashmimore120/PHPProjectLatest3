<?php

declare(strict_types= 1); 
namespace App\Controllers;

use App\Attributes\Get;
use App\Enums\InvoiceStatus;
use App\Models\Invoice;
use App\Services\InvoiceService;
use App\View;
use Twig\Environment AS Twig;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;


class InvoiceController
{

  public function __construct(private InvoiceService $invoiceService)
  {
    
  }

  public function index(Request $request, Response $response, $args): Response
  {
    
    return Twig::fromRequest($request)->render($response,'invoices/index.twig',['invoices'=>$this->invoiceService->getPaidInvoices()]);
  }

}






















































// public function __construct(private Twig $twig)
//   {
    
//   }


//   #[Get('/invoices')]
//   public function index(): string
//   {
//     $invoices = Invoice::query()->where('status', InvoiceStatus::Paid)->get()->map(
//       fn(Invoice $invoice)=> [
//         'invoiceNumber' => $invoice->invoice_number,
//         'amount'        => $invoice->amount,
//         'status'        => $invoice->status->toString(),
//         'dueDate'       => $invoice->due_date->toDateTimeString(),
//       ]
//     )->toArray();
    
//     return $this->twig->render('invoices/index.twig', ['invoices'=>$invoices]);
//   }



































































// declare(strict_types= 1); 
// namespace App\Controllers;

// use App\Attributes\Get;
// use App\Enums\InvoiceStatus;
// use App\Enums\Color;
// use App\Models\Invoice;
// use App\View;
// use Carbon\Carbon;
// use Symfony\Component\Mailer\MailerInterface;

// class InvoiceController
// {

//   #[Get('/invoices')]
//   public function index(): View
//   {
//     $invoices = Invoice::query()->where('status', InvoiceStatus::Paid)->get()->toArray();
//     return View::make('invoices/index', ['invoices'=>$invoices]);
//   }

//   #[Get('/invoices/new')]
//   public function create()
//   {
//     $invoice = new Invoice();

//     $invoice->invoice_number = 5;
//     $invoice->amount = 20;
//     $invoice->status = InvoiceStatus::Pending;
//     $invoice->due_date = (new Carbon())->addDay();
//     $invoice->save();

//     echo $invoice->id . ', ' . $invoice->due_date->format('m/d/Y');
//   }
// }




























































// declare(strict_types= 1); 
// namespace App\Controllers;

// use App\View;
// class InvoiceController
// {
//   public function index():View
//   {
//     return View::make('invoices/index');
//   }
//   public function create():View
//   {
//     return View::make('invoices/create');
//   }
//   public function store()
//   {
//     $amount= $_POST['amount'];
//     var_dump($amount);
//   }
// }