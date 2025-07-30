<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function categories()
    {
        return $this->belongsTo(Category::class, 'category_fk');
    }

    public function promotions()
    {
        return $this->hasMany(Promotion::class, 'product_fk');
    }

    public function characteristics()
    {
        return $this->hasMany(Characteristic::class, 'product_fk');
    }

    public function wishlistUsers()
    {
        return $this->belongsToMany(User::class, 'wishlist', 'product_fk', 'user_fk');
    }

    public function productImages()
    {
        return $this->hasMany(productImage::class, 'product_fk');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class, 'product_fk');
    }
}
