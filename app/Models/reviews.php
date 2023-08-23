<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reviews extends Model
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
}
