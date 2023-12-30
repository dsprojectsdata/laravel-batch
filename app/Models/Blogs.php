<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Blogs extends Model
{
    use HasFactory;

    protected $table = 'blogs';


    public function category(): BelongsTo
    {
        return $this->belongsTo(BlogCate::class, 'cate_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comments::class, 'blog_id');
    }
}
