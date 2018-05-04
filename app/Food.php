<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    //
    protected $table = 'foods';

    public function image(){
        return $this->hasMany('App\Image', 'food_id', 'id'); 
    }
}
