<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
     protected $fillable = [
        'title',
        'category_id',
        'number',
        'division',
        'status',
        'file'
    ];

    public function PostCategory()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
