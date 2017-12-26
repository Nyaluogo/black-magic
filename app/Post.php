<?php

namespace Black_Magik;

use Illuminate\Database\Eloquent\Model;
use Storage;

class Post extends Model
{
    public $with = ['user','likes','comment'];
    protected $fillable = [
        'content',
        'user_id',
        'path',
        'thumb',
        'image_extension',
        'image_name',
        'is_active',
        'is_featured',
        'mobile_image_name',
        'mobile_image_path',
        'mobile_extension',
        'title',
        'description',
        'price',
        'category',
        'tags',
        'print_options',
        'number_of_prints_for_sale',
        'type_of_print',
        'year_of_completion',
        'category',
        'medium',
        'material',
        'dimensions',
        'mature_content_available',
        'mature_content_type',
        'comment_options',
        'sharing_options',
        'download_options',
        'watermark_options',
        'display_options',
        'critique_options'
        ];

    public function user()
    {
        return $this->belongsto('Black_Magik\User');
    }

    public function likes()
    {
        return $this->hasMany('Black_Magik\Like');
    }

    public function comment()
    {
        return $this->hasMany('Black_Magik\Comment');
    }

    public function getPathAttribute($value)
    {

        return asset(Storage::url($value));

    }

    public function getThumbAttribute($value)
    {
      
        return asset(Storage::url($value));

    }
}
