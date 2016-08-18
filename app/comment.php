<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
     public $table = "comment"; 
    public function blog()
 {
 return $this->belongsTo('blog');
 }
}
