<?php

namespace Black_Magik;

use Illuminate\Database\Eloquent\Model;

class Friendship extends Model
{
    //
    protected $fillable =[
      'requester',
      'user_requested',
      'status',
    ];
}
