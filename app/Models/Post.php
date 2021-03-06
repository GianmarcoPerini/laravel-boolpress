<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    
    protected $fillable = ['author','author_img','description','post_img','title','category_id'];

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function getImagePrefix( $img ){
        if ( str_contains( $img, 'posts/images' )){
            return asset('storage') . '/';
        }
        return '';
    }

    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag');
    }
}
