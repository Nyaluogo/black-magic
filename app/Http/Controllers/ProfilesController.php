<?php

namespace Black_Magik\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Session;
use Black_Magik\User;
use Black_Magik\Product;
use Black_Magik\Post;
use Auth;

class ProfilesController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index($slug)
    {
      $user = User::where('slug',$slug)->first();
      $orders = Auth::user()->orders;
      $orders->transform(function($order,$key)
      {
        $order->cart = unserialize($order->cart);
        return $order;
      });
      // return view('profiles.profile')->with('user',$user);
      return view('profiles.profile',['user' => $user, 'orders' => $orders]);

      // return view('profiles.profile')->with('user',$user);

    }

    public function view_user($id)
    {
      $user = User::where('id',$id)->first();
      $orders = Auth::user()->orders;
      $orders->transform(function($order,$key)
      {
        $order->cart = unserialize($order->cart);
        return $order;
      });
      // return view('profiles.profile')->with('user',$user);
      return view('profiles.profile',['user' => $user, 'orders' => $orders]);
    }

    public function edit()
    {
      return view('profiles.edit')->with('info',Auth::user()->profile);
    }

    public function update(Request $request)
    {

      $this->validate($request,[
        'biography' => 'max:255',
        // 'website' => 'url'
      ]);

      if(Auth::user()->profile()->update([
        'phone_number' => $request->phone_number,
        'country' => $request->country,
        'city' => $request->city,
        'website' => $request->website,
        'fav_visual_artist' => $request->fav_visual_artist,
        'fav_books' => $request->fav_books,
        'fav_music' => $request->fav_music,
        'fav_movies' => $request->fav_movies,
        'biography' => $request->biography,
        'type_of_artist' => $request->type_of_artist,
        'area_of_specialty' => $request->area_of_specialty,
      ])){

        // Auth::user()->update([
        //   'first_name' => $request->first_name,
        //   'last_name' => $request->last_name,
        // ]);
        if($request->hasFile('avatar'))
        {
          Auth::user()->update([
            'avatar' => $request->avatar->store('public/avatars')
          ]);
        }

        Session::flash('success','profile updated');
        return redirect()->back();
      }
      else
       {
        Session::flash('fail','error! profile not updated');
        return redirect()->back();
      }



    }

    public function myImages($id)
    {
      $myImages = Post::where('user_id',$id)->get();

      return $myImages;
    }

    public function viewImage($id)
    {
      $image = Post::where('id',$id)->get();
      return view('image',['image' => $image]);
    }

}
