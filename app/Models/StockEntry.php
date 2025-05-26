<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StockEntry extends Model
{
    protected $fillable = ['product_id', 'supplier_id', 'quantity', 'received_date'];
     public function product()
       {
           return $this->belongsTo(Product::class);
       }

       public function supplier()
       {
           return $this->belongsTo(Supplier::class);
       }
}
