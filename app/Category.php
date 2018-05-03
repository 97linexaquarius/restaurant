<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = 'category';
    public function food(){
        return $this->hasMany('App\Food', 'cate_id', 'id'); 
    }
}
