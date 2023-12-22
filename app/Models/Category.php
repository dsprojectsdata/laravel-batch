<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Category extends Model
{
    use HasFactory;
    protected $table = 'category';

    public function allProducts(): HasOne
    {
        return $this->hasOne(Product::class, 'category');
    }
}
