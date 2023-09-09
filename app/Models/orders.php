<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    use HasFactory;
    protected $guarded = [];
    function user() {
        return $this->belongsTo(User::class)
                    ->withDefault();
    }

    function order_items() {
        return $this->hasMany(OrderItems::class);
    }
}
