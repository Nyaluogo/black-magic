<?php

namespace Black_Magik;

use Illuminate\Database\Eloquent\Model;

class Purpose extends Model
{
    protected $fillable = [
    'user_id',
    'discover',
    'improve_skills',
    'promote_work',
    'sell_art',
    'buy_art',
    'other',
    ];

    public function user()
    {
      return $this->belongsTo('App/User');
    }
}
