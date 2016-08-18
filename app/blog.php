<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    public $table = "blog"; 
    public function comments()
 {
 return $this->hasMany('comment');
 }
}
