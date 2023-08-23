<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItems extends Model
{
    use HasFactory;

    function product() {
        return $this->belongsTo(product::class , 'product_id')
                    ->withDefault();
    }

    function user() {
        return $this->belongsTo(user::class , 'user_id')
                    ->withDefault();
    }

    function orders() {
        return $this->belongsTo(orders::class , 'orders_id')
                    ->withDefault();
    }
}
