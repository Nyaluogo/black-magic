<?php

namespace Black_Magik;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public $with = ['user'];

    protected $fillable = ['user_id','post_id','comment'];
    public function comment()
    {
        return $this->belongsTo('Black_Magik\Post');
    }

    public function user()
    {
        return $this->belongsTo('Black_Magik\User');
    }
}
