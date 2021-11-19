<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $fillable = ['author','author_img','description','post_img','title'];

    public function category()
    {
        return $this->belongsTo('App\Model\Category');
    }

    public function tag()
    {
        return $this->belongsToMany('App\Model\Tag');
    }

    
}
