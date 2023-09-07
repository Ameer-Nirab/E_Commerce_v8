<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reviews extends Model
{
    use HasFactory;

    protected $guarded = [];

    function product() {
        return $this->belongsTo(product::class)
                    ->withDefault();
    }

    function user() {
        return $this->belongsTo(user::class)
                    ->withDefault();
    }
}
