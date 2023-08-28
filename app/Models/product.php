<?php

namespace App\Models;

use App\Traits\Trans;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory, Trans;

    protected $guarded = [];

    function category() {
        return $this->belongsTo(category::class)
                    ->withDefault();
    }

    function reviews() {
        return $this->hasMany(reviews::class);
    }

    function carts() {
        return $this->hasMany(cart::class);
    }

    function order_items() {
        return $this->hasMany(OrderItems::class);
    }

    public function album()
    {
        return $this->hasMany(Image::class);
    }
}
