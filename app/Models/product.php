<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    function category() {
        return $this->belongsTo(category::class , 'category_id')
                    ->withDefault();
    }

    function reviews() {
        return $this->hasMany(reviews::class , 'product_id');
    }

    function carts() {
        return $this->hasMany(cart::class , 'product_id');
    }

    function order_items() {
        return $this->hasMany(OrderItems::class , 'order_id');
    }
}
