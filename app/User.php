<?php

namespace Black_Magik;

use Illuminate\Notifications\Notifiable;
use Black_Magik\Traits\Friendable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Carbon\Carbon;
use Storage;
use Laravel\Scout\Searchable;

class User extends Authenticatable
{
    use Notifiable;
    use Friendable;
    use Searchable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'slug',
        'avatar',
        'gender',
        'DOB',
        'first_name',
        'last_name',
        'city',
        'country',
        'website',
        'fav_visual_artist',
        'fav_music',
        'fav_books',
        'fav_movies',
        'biography',
        'reason_for_joining',
        'groupID',
        'device',
        'ip_address',
        'phone_number',
        'provider',
        'provider_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function addNew($input)
    {
        $check = static::where('provider_id',$input['provider_id'])->first();


        if(is_null($check)){
            return static::create($input);
        }


        return $check;
    }

    public function profile()
    {
      return $this->hasOne('Black_Magik\Profile');
    }

     public function purpose()
    {
      return $this->hasOne('Black_Magik\Purpose');
    }

        /**
    * Accessor for Age.
    */
    public function getAgeAttribute()
    {
        return Carbon::parse($this->attributes['DOB'])->age;
    }

    // accessor ofr avatar
    public function getAvatarAttribute($avatar)
    {
        return asset(Storage::url($avatar));
    }

    public function posts()
    {
        return $this->hasMany('Black_Magik\Post');
    }

    public function product()
    {
        return $this->hasMany('Black_Magik\Product');
    }

    //A user can have many comments
    public function comments()
    {
        return $this->hasMany('Black_Magik\Comment');
    }

    //A user can have many orders
    public function orders()
    {
        return $this->hasMany('Black_Magik\Order');
    }
}
