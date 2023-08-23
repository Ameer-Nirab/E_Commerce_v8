<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    function parent() {
        return $this->belongsTo(Category::class , 'parent_id')
                    ->withDefault();
    }

    function children() {
        return $this->hasMany(Category::class , 'parent_id');
    }

    function products() {
        return $this->hasMany(product::class , 'parent_id');
    }
}