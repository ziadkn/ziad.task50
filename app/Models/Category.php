<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'parent_id'];

    public function parentCategory () {
        return $this->belongsTo(Category::class, 'parent_id', 'id');
    }

    public function books () {
        return $this->hasMany(Book::class, 'category_id', 'id');
    }
}
