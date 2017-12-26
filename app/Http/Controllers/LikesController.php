<?php

namespace Black_Magik\Http\Controllers;

use Illuminate\Http\Request;
use Black_Magik\Post;
use Auth;
use Black_Magik\Like;

class LikesController extends Controller
{
    public function like($id)
    {
        $post = Post::find($id);

        $like = Like::create([
            'user_id' => Auth::id(),
            'post_id' => $post->id
        ]);

        return Like::find($like->id);
    }

    public function unlike($id)
    {
        $post = Post::find($id);

        $like = Like::where('user_id', Auth::id())
                ->where('post_id',$post->id)
                ->first();
        $like->delete();

        return $like->id;
    }

    public function getLikes($id)
    {
        $post = Post::find($id);
        $likes = Like::where('post_id',$post->id)->get();

        return $likes->count();
    }
}
