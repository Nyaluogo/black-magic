<?php

namespace Black_Magik;

use Illuminate\Database\Eloquent\Model;
use Storage;
class Product extends Model
{
    protected $fillable = [
        'imagePath',
        'title',
        'description',
        'price',
        'user_id',
        'category',
        'tags'
    ];

    public function user()
    {
        return $this->belongsto('Black_Magik\User');
    }

    public function likes()
    {
        return $this->hasMany('Black_Magik\Like');
    }

     public function profile()
    {
        return $this->belongsto('Black_Magik\Profile');
    }
}
