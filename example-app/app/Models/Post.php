<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    // A post belongs to a category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // A post belongs to a user
    public function author() // By default, belongsTo will assume the foreign key is author_id, specifying below will change this.
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
