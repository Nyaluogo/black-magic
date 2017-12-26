<?php

namespace Black_Magik\Http\Controllers;

use Illuminate\Http\Request;
use Black_Magik\Comment;
use Black_Magik\Post;
use Auth;

class CommentController extends Controller
{
    public function comment(Request $request, $id)
    {
        $post = Post::find($id);

        return Comment::create([
            'user_id' => Auth::id(),
            'post_id' => $post->id,
            'comment' => $request->content
        ]);
    }

    public function hide_comment($id)
    {
        $post = Post::find($id);

        Comment::where('user_id',Auth::id())
                ->where('post_id',$post->id)
                ->first()
                ->delete();

            return 1;
    }
}
