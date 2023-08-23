<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    use HasFactory;

    function orders() {
        return $this->belongsTo(User::class , 'order_id')
                    ->withDefault();
    }

    function order_items() {
        return $this->hasMany(OrderItems::class , 'order_id');
    }

    function payments() {
        return $this->hasMany(payments::class , 'order_id');
    }
}
