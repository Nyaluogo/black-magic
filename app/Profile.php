<?php

namespace Black_Magik;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
      'phone_number',
      'user_id', 
      'city',
      'country',
      'website',
      'notes',
      'reason_for_joining',
      'fav_visual_artist',
      'fav_music',
      'fav_books',
      'fav_movies',
      'biography',
      'type_of_artist',
      'area_of_specialty',];

    public function user()
    {
      return $this->belongsTo('App/User');
    }
}
