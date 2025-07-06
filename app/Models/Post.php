<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post';
    protected $guarded = ['id']; // read only
    protected $fillable = ['title', 'author', 'content','published']; // read and write

    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
