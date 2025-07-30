<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function ordersDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }
}
