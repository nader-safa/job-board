<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = ['id']; // read only
    protected $fillable = ['title', 'author', 'content','published']; // read and write
}
