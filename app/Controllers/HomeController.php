<?php

declare(strict_types= 1); 
namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\Twig;

class HomeController
{
  
  public function index(Request $request, Response $response, $args)
  {
      return Twig::fromRequest($request)->render($response,'index.twig');
  }
  
 
}




























// #[Post('/')]
// public function store()
// {

// }

// #[Put('/')]
// public function update()
// {
  
// }

























































// class HomeController
// {
//   public function index():View
//   {
        
    
//     $email = 'G@ji.com';
//     $name= 'G Ji';
//     $amount = 25;

//     $userModel = new User();
//     $invoiceModel = new Invoice();
    
//     $invoiceId=(new SignUp($userModel, $invoiceModel))->register(['email'=>$email, 'name'=>$name,],['amount'=>$amount,]);  
 
//     return View::make('index', ['invoice'=> $invoiceModel->find($invoiceId)]);
//   } 
// }













