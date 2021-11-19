<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    protected $fillable = ['age','address','zip_code'];

    public function user(){
        return $this->hasOne('App\User');
    }
}
