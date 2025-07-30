<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public function users()
    {
        return $this->belongsTo(user::class, 'user_fk');
    }

    public function products()
    {
        return $this->belongsTo(Product::class, 'product_fk');
    }
}
