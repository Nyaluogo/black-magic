<?php

namespace Black_Magik\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Black_Magik\User;
use Black_Magik\Post;
use Black_Magik\Comment;

class CommentThreadController extends Controller
{
    public function thread($id)
    {
        $post = Post::find($id);
        $comments = Comment::where('post_id',$post->id);
        $thread = array();

        foreach($comments as $comment):
            array_push($thread, $comment);
        endforeach;

         usort($thread, function($p1,$p2)
        {
            return $p1->id < $p2->id;
        });

        return $thread;
    }
}
