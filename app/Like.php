<?php

namespace Black_Magik;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    public $with = ['user'];

    protected $fillable = ['user_id','post_id'];

    public function post()
    {
        return $this->belongsTo('Black_Magik\Post');
    }

    public function user()
    {
        return $this->belongsTo('Black_Magik\User');
    }
}
