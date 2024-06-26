<?php

use App\App;
use App\Controllers\HomeController;
use App\Router;
use App\Config;
use App\Controllers\CurlController;
use App\Controllers\GeneratorExampleController;
use App\Controllers\InvoiceController;
use App\Controllers\UserController;
use App\Models\Invoice;
use Illuminate\Container\Container;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;
use Twig\Extra\Intl\IntlExtension;

require_once __DIR__ . '/../vendor/autoload.php';


define('STORAGE_PATH', __DIR__ . '/../storage');
define('VIEW_PATH', __DIR__ . '/../views');

// $container = new Container;
// $router = new Router($container);

// $router->registerRoutesFromControllerAttributes(
//   [
//     HomeController::class,
//     GeneratorExampleController::class,
//     InvoiceController::class,
//     UserController::class,
//     CurlController::class,
//   ]
//   ); 
// (new App(
//   $container,$router,
//   ['uri'=>$_SERVER['REQUEST_URI'], 'method'=>$_SERVER['REQUEST_METHOD']],
//   ))->boot()->run();





$app = AppFactory::create();

// $app->get('/', function (Request $request, Response $response, $args) {
//     $view = Twig::fromRequest($request);
//     return $view->render($response, 'index.twig');
// });

$app->get('/', [HomeController::class, 'index']);
$app->get('/invoices', [InvoiceController::class, 'index']);




// Create Twig
$twig = Twig::create(VIEW_PATH, [
  'cache' => STORAGE_PATH.'/cache',
  'auto_reload' => true
]);

$twig->addExtension(new IntlExtension());

// Add Twig-View Middleware
$app->add(TwigMiddleware::create($app, $twig));


$app->run();









 











































  // declare(strict_types=1);
  // use App\Invoice;
  
  // require_once __DIR__ . '/../vendor/autoload.php';
  
  // $dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
  // $dotenv->load();
  
  // (new Invoice())->create(
  //   [
  //     ['description'=>'Item 1', 'quantity'=>1, 'unitPrice'=>15.25],
  //     ['description'=>'Item 2', 'quantity'=>2, 'unitPrice'=>2],
  //     ['description'=>'Item 3', 'quantity'=>3, 'unitPrice'=>0.25],
  //   ]
  //   );
  


















  // <?php

  // declare(strict_types=1);
  
  // use App\VarianceExample\AnimalFood;
  // use App\VarianceExample\CatShelter;
  // use App\VarianceExample\DogShelter;
  // use App\VarianceExample\Food;
  
  // require_once __DIR__ . '/../vendor/autoload.php';
  
  // $kitty = (new CatShelter)->adopt("Ricky");
  // $kitty->speak();
  // echo PHP_EOL;
  
  // $catFood = new AnimalFood();
  // $kitty->eat($catFood);
  // echo PHP_EOL;
  
  // $doggy = (new DogShelter)->adopt("Mavrick");
  // $doggy->speak();
  // echo PHP_EOL;
  
  // $banana = new Food();
  // $doggy->eat($banana);
  



  // $router
  // ->get('/',[HomeController::class,'index'])
  // ->get('/download',[HomeController::class,'download'])
  // ->post('/upload',[HomeController::class,'upload'])
  // ->get('/invoices',[InvoiceController::class,'index'])
  // ->get('/invoices/create',[InvoiceController::class,'create'])
  // ->post('/invoices/create',[InvoiceController::class,'store']);
  












