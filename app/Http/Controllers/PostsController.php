<?php

namespace Black_Magik\Http\Controllers;

use Black_Magik\Post;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Http\File;
use InterImage;
use Intervention\Image\ImageManagerStatic as Image;

class PostsController extends Controller
{
    public function store(Request $request)
    {
        Post::create([
            'user_id' => Auth::id(),
            'content' => $request->content
        ]);
    }



    public function list()
    {
        return Post::all();
    }

    public function artwork($id, Request $request){
        /* Fetch the artwork using the id */
        $image_path = 'public/artwork/'.$id;

        $image = Storage::get($image_path);

        /* Return the file */
        return Image::make($image)->response();

    }
}
