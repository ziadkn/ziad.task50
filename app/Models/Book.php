<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'name',
        'description',
        'published_at',
        'created_by',
        'category_id'
    ];

    public function createdBy () {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }

    public function category () {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
