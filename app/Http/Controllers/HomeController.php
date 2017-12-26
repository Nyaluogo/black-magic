<?php

namespace Black_Magik\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Black_Magik\Product;
use Black_Magik\Purpose;
use Session;
use Black_Magik\Post;
use Storage;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Str;
use Illuminate\Http\File;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $products = Post::all();
        return view('home',['products' => $products]);
    }

    public function welcome()
    {
      $products = Post::all();
      return view('welcome',['products' => $products]);

    }

    public function purpose()
    {
        return view('firstTimers.purpose');
    }

    public function postPurpose(Request $request)
    {
        if($request->discover > 1)
        {
            return false;
        }

        if($request->other > 1)
        {
            return false;
        }

        if($request->buy > 1)
        {
            return false;
        }

        if($request->sell > 1)
        {
            return false;
        }

        if($request->promote > 1)
        {
            return false;
        }

        if($request->improve > 1)
        {
            return false;
        }

        Purpose::create([
            'user_id' => Auth::id(),
            'discover' => $request->discover,
            'improve_skills' => $request->improve,
            'promote_work' => $request->promote,
            'sell_art' => $request->sell,
            'buy_art' => $request->buy,
            'other' => $request->other,
        ]);

        return $this->index();
    }

    public function notifications()
    {
        Auth::user()->unreadNotifications->markAsRead();

        return view('nots')->with('nots',Auth::user()->notifications);
    }
}
