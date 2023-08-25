<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payments extends Model
{
    use HasFactory;

    function user() {
        return $this->belongsTo(user::class)
                    ->withDefault();
    }

    function orders() {
        return $this->belongsTo(orders::class)
                    ->withDefault();
    }
}
