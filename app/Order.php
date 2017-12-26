<?php

namespace Black_Magik;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function user(){
      return $this->belongsTo('Black_Magik\User');
    }
}
