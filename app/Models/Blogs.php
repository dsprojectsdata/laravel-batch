<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Blogs extends Model
{
    use HasFactory;

    protected $table = 'blogs';


    public function category(): BelongsTo
    {
        return $this->belongsTo(BlogCate::class, 'cate_id');
    }
}
