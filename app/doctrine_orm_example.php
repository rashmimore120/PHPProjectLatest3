<?php

declare(strict_types=1);

use App\Entity\Invoice;
use App\Entity\InvoiceItem;
use App\Enums\InvoiceStatus;
use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;
use Dotenv\Dotenv;

require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

$config=ORMSetup::createAttributeMetadataConfiguration([__DIR__ . '/Entity']);
$params = [
  'dbname'    => $_ENV['DB_DATABASE'],
  'user'      => $_ENV['DB_USER'],
  'password'  => $_ENV['DB_PASS'],
  'host'      => $_ENV['DB_HOST'],
  'driver'    => $_ENV['DB_DRIVER'] ?? 'pdo_mysql',
];


$entityManager= new EntityManager(DriverManager::getConnection($params), $config);

$items = [['item 1', 1, 15], ['item 2', 2, 7.5], ['item 3', 4, 3.75]];

$invoice = (new Invoice())->setAmount(45)->setInvoiceNumber('1')->setStatus(InvoiceStatus::Pending);

foreach($items as [$description, $quantity, $unitPrice]) {
  $item = (new InvoiceItem())->setDescription($description)->setQuantity($quantity)->setUnitPrice($unitPrice);

  $invoice->addItem($item);
  
}

$entityManager->persist($invoice);
$entityManager->flush();

// $invoice = $entityManager->find(Invoice::class, 24);
// $invoice->setStatus(InvoiceStatus::Paid);
// $invoice->getItems()->get(0)->setDescription('Foo Bar');
// $entityManager->flush();






























// <?php

// declare(strict_types=1);

// use App\Entity\Invoice;
// use App\Enums\InvoiceStatus;
// use Doctrine\DBAL\DriverManager;
// use Doctrine\ORM\EntityManager;
// use Doctrine\ORM\ORMSetup;
// use Dotenv\Dotenv;

// require_once __DIR__ . '/../vendor/autoload.php';

// $dotenv = Dotenv::createImmutable(dirname(__DIR__));
// $dotenv->load();

// $config=ORMSetup::createAttributeMetadataConfiguration([__DIR__ . '/Entity']);
// $params = [
//   'dbname'    => $_ENV['DB_DATABASE'],
//   'user'      => $_ENV['DB_USER'],
//   'password'  => $_ENV['DB_PASS'],
//   'host'      => $_ENV['DB_HOST'],
//   'driver'    => $_ENV['DB_DRIVER'] ?? 'pdo_mysql',
// ];

// $entityManager= new EntityManager(DriverManager::getConnection($params), $config);


// $queryBuilder = $entityManager->createQueryBuilder();

// $query=$queryBuilder
//   ->select('i', 'it')
//   ->from(Invoice::class, 'i')
//   ->join('i.items', 'it')
//   ->where(
//     $queryBuilder->expr()->andX(
//       $queryBuilder->expr()->gt('i.amount', ':amount'),
//       $queryBuilder->expr()->orX(
//         $queryBuilder->expr()->eq('i.status', ':status'),
//         $queryBuilder->expr()->gte('i.createdAt', ':date'),
//       )
//     )
//   )
//   ->setParameter('amount', 10)
//   ->setParameter('status', InvoiceStatus::Paid->value)
//   ->setParameter('date', '2024-06-18 00:00:00')
//   ->orderBy('i.createdAt', 'desc')
//   ->getQuery();


// $invoices = $query->getResult();


// /** @var Invoice $invoice */
// foreach($invoices as $invoice)
// {
//   echo $invoice->getCreatedAt()->format('m/d/Y g:ia') . ', ' . $invoice->getAmount() . ', ' . $invoice->getStatus()->toString() . PHP_EOL;

//   foreach($invoice->getItems() as $item)
//   {
//     echo ' - ' . $item->getDescription() . ', ' . $item->getQuantity() . ', ' . $item->getUnitPrice() . PHP_EOL;
//   }
// }