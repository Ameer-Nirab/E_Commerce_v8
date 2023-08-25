<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItems extends Model
{
    use HasFactory;

    function product() {
        return $this->belongsTo(product::class)
                    ->withDefault();
    }

    function user() {
        return $this->belongsTo(user::class)
                    ->withDefault();
    }

    function orders() {
        return $this->belongsTo(orders::class)
                    ->withDefault();
    }
}
