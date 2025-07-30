<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    public function orders()
    {
        return $this->belongsTo(Order::class, 'order_fk');
    }

    public function products()
    {
        return $this->belongsTo(Product::class, 'product_fk');
    }
}
