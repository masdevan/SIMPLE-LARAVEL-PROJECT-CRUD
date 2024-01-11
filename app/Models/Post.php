<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Include
    // protected $fillable = ['title', 'excerpt', 'body'];

    // Exclude
    protected $guarded = ['id'];
}
