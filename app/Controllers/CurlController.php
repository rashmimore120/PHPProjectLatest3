<?php

declare(strict_types=1);
namespace App\Controllers;

use App\Attributes\Get;
use App\Services\Emailable\EmailValidationService;
use App\Contracts\EmailValidationInterface;

class CurlController
{
    public function __construct(private EmailValidationInterface $emailValidationService)
    {

    }

    #[Get('/curl')]
    public function index()
    { 
      $email = 'rashmimore120@gmail.com';
      $result = $this->emailValidationService->verify($email);

      $score = $result->score;
      $isDeliverable = $result->isDeliverable;

      var_dump($score, $isDeliverable);

      echo '<pre>';
      print_r($result);
      echo '</pre>';
    }
}






































// $handle = curl_init();


//       $apiKey = $_ENV['EMAILABLE_API_KEY'];
//       $email = 'rashmimore120@gmail.com';

//       $params = [
//         'api_key' => $apiKey,
//         'email' => $email,
//       ];

//       $url = 'https://api.emailable.com/v1/verify?' . http_build_query($params);
//       curl_setopt($handle, CURLOPT_URL, $url);
//       curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);

//       $content=curl_exec($handle);

//       if($content !== false) {
//         $data = json_decode($content, true);

//         echo '<pre>';
//       print_r($data);
//       }