<?php

namespace Black_Magik\Http\Controllers;

use Illuminate\Http\Request;
use Black_Magik\User;
use Black_Magik\Post;
use Black_Magik\Like;
use Auth;

class FeedsController extends Controller
{
    public function feed()
    {
        $friends = Auth::user()->following();

        $feed = array();

        foreach($friends as $friend):

            foreach($friend->posts as $post):

                array_push($feed, $post);

            endforeach;

        endforeach;

        foreach(Auth::user()->posts as $post):
            array_push($feed, $post);
        endforeach;

        usort($feed, function($p1,$p2)
        {
            return $p1->id < $p2->id;
        });

        return $feed;
    }

     public function get_strangers()
    {

      $strangers = Auth::user()->strangers();
      $explore = array();

      foreach($strangers as $stranger):

        foreach($stranger->posts as $post):

          array_push($explore,$post);

        endforeach;

      endforeach;

      return $explore;
    }
    /*this is for he explore tab*/
    public function getIndex()
    {
        $data = $this->get_strangers();

        return view('friendships.explore')->with('data',$data);
    }
}
