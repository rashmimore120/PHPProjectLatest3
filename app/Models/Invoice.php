<?php
declare(strict_types= 1);
namespace App\Models;

use App\Enums\InvoiceStatus;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** 
 * @property int $id
 * @property string $invoice_number
 * @property float $amount
 * @property InvoiceStatus $status
 * @property Carbon $created_at
 * @property Carbon $due_date
 * 
 * @property-read Collection $items
 */

class Invoice extends Model
{
  CONST UPDATED_AT = null;

  protected $casts = [
    'created_at' => 'datetime',
    'due_date' => 'datetime',
    'status' => InvoiceStatus::class,
  ];

  protected static function booted()
  {
    static::creating(function(Invoice $invoice) {
      if($invoice->isClean('due_date')){
      $invoice->due_date = (new Carbon())->addDays(10);
      }
    });
  }


  public function items():HasMany
  {
    return $this->hasMany(InvoiceItem::class);
  }
}













































































































// declare(strict_types= 1);
// namespace App\Models;

// use App\Enums\InvoiceStatus;
// use App\Model;


// class Invoice extends Model
// {
  
//   public function all(InvoiceStatus $status):array
//   {
//     return $this->db->createQueryBuilder()->select('id', 'invoice_number', 'amount', 'status')
//                     ->from('invoices')
//                     ->where('status = ?')
//                     ->setParameter(0, $status->value)
//                     ->fetchAllAssociative();
//   }
// }















































































































// declare(strict_types= 1);
// namespace App\Models;
// use App\Model;

// class Invoice extends Model
// {
  
//   public function create(float $amount, int $userId):int
//   {
//     $stmt = $this->db->prepare(
//       'INSERT INTO invoices (amount, user_id) VALUES(?,?)'
//     );
//     $stmt->execute([$amount, $userId]);
//     return (int) $this->db->lastInsertId();
              
//   }
//   public function find(int $invoiceId):array
//   {
//     $stmt=$this->db->prepare(
//       'SELECT invoices.id, amount, full_name
//       FROM invoices
//       LEFT JOIN users ON users.id = user_id
//       WHERE invoices.id=?'
//     );
//     $stmt->execute([$invoiceId]);
//     $invoice = $stmt->fetch();
//     return $invoice ? $invoice : [];
//   }
// }
