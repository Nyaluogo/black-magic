<?php

namespace Black_Magik\Http\Controllers;

use Black_Magik\Product;
use Session;
use Black_Magik\Cart;
use Black_Magik\Post;
use Black_Magik\Order;
use Auth;
use Illuminate\Http\Request;
use Storage;
use Black_Magik\User;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Str;
use Illuminate\Http\File;
use Stripe\Stripe;
use Stripe\Charge;

class ProductController extends Controller
{
    public function getIndex()
    {

        $products = Post::all();
        return view('shop.index',['products' => $products]);
    }

    // filter shop by category
    public function filterShop(Request $request, $id)
    {
      if($id == 1)
      {
          $products = Post::where('category','traditional')->get();
      }
      if($id == 2)
      {
          $products = Post::where('category','digital_art')->get();
      }
      if($id == 3)
      {
          $products = Post::where('category','collage')->get();
      }
      if($id == 4)
      {
          $products = Post::where('category','drawing')->get();
      }
      if($id == 5)
      {
          $products = Post::where('category','mixed_media')->get();
      }
      if($id == 6)
      {
          $products = Post::where('category','mosaic')->get();
      }
      if($id == 7)
      {
          $products = Post::where('category','abstract_art')->get();
      }
      if($id == 8)
      {
          $products = Post::where('category','street_art')->get();
      }
      if($id == 9)
      {
          $products = Post::where('category','photography')->where('price','>=',1000)->get();
      }
      else{
        return redirect()->back();
      }

      return view('shop.index',['products' => $products]);
    }

    /*Add image to databse*/

 public function store(Request $request)
    {

        $this->validate($request, [
            'image_file' => 'required|image|max:4096'
        ]);

        $file = $request->file('image_file');

        // Double check file validity
        if(!$file->isValid())
            return response()->json([
                'error' => 'File is not valid!'
            ]);;

        // $imageName = $file->getClientOriginalName();

        $image = Storage::disk('public')->putFile('artwork', $file);

        /*Name of the thumbfile*/
        $thumb = 'artwork/' . Str::random(40) . '.jpeg';

        /*Get the iamge from storage*/
        $stream = Image::make(Storage::disk('public')->get($image))->stream();

        /*Put the stream in storage but use the thumbname*/
        Storage::disk('public')->put($thumb, $stream);

        $imageName = basename($image);



        if($request->display_options == 1)
        {
          $stream = Image::make(Storage::disk('public')->get($image))->fit(400, 400)->stream();
          Storage::disk('public')->put($thumb, $stream);
        }

        if($request->display_options == 2)
        {
          $stream = Image::make(Storage::disk('public')->get($image))->fit(600, 600)->stream();
          Storage::disk('public')->put($thumb, $stream);
        }

        if($request->display_options == 3)
        {
          $stream = Image::make(Storage::disk('public')->get($image))->fit(800, 800)->stream();
          Storage::disk('public')->put($thumb, $stream);
        }

        if($request->display_options == 4)
        {
          $stream = Image::make(Storage::disk('public')->get($image))->fit(900, 900)->stream();
          Storage::disk('public')->put($thumb, $stream);
        }

        if($request->display_options == 5)
        {
          $stream = Image::make(Storage::disk('public')->get($image))->fit(1024, 1024)->stream();
          Storage::disk('public')->put($thumb, $stream);
        }

        if($request->display_options == 6)
        {
          $stream = Image::make(Storage::disk('public')->get($image))->fit(1280, 1280)->stream();
          Storage::disk('public')->put($thumb, $stream);
        }
        if($request->display_options > 6 || $request->display_options < 0)
        {
          return response()->json([
              'error' => 'File is not valid!'
          ]);
        }

        if($request->watermark_check == 1)
        {
          $watermark =  Image::make(Storage::disk('public')->get('watermark/waterdrop.png'));
          $stream = Image::make(Storage::disk('public')->get($thumb))->insert($watermark, 'center')->stream();
          Storage::disk('public')->put($thumb, $stream);
        }

        $myPercentage = $request->price * 0.2;



        $contentID = Auth::id() . $image;
        $content = Auth::id() . $imageName;
        $image = Post::create([
            'path' => $image,
            'thumb' => $thumb,
            'user_id' => Auth::id(),
            'image_name' => $imageName,
            'title' => $request->title,
            'description' => $request->description,
            'watermark_options' => $request->watermark_check,
            'mature_content_type' => $request->mature_options,
            'tags' => serialize($request->tags),
            'display_options' => $request->display_options,
            'category' => $request->selected_category,
            'comment_options' => $request->comment_options,
            'sharing_options' => $request->sharing_options,
            'critique_options' => $request->critiqe_options,
            'download_options' => $request->download_options,
            'print_options' => $request->print_options,
            'price' => $request->price,
            'content' => $content,
        ]);

        if($image)
            return view('portfolio.add')->with('info',Auth::user()->profile);

        else
             return view('home')->with('info',Auth::user()->profile);

    }



     public function download($id, Request $request){
        $product = Post::find($id);

        //get the image path
        $new_image_path = storage_path() . "/app/public/artwork/" . $product->image_name;

          /*SEt the header but have not imlemented it though.. kinda buggy*/
          $headers = [
            'Content-Type' => 'image/jpeg/jpg',
          ];

        // download the image;
        return response()->download($new_image_path);

    }

    public function delete($id)
    {
      $post = Post::find($id);
      if(Post::find($id)->delete()){
        return redirect('home');
      }
    }

     public function AddToPortfolio()
    {
      return view('portfolio.add')->with('info',Auth::user()->profile);
    }

    public function ShowPortfolio($id)
    {
        $products = Post::where('user_id',$id)->get();
        $user = User::where('id',$id)->first();

        return view('portfolio.view',['products' => $products, 'user' => $user]);
    }

    public function getAddtoCart(Request $request, $id)
    {
        $product = Post::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);
        // return redirect()->route('product.index');
        return redirect()->back();
    }

    public function getCart()
    {
        if(!Session::has('cart'))
        {
            return view('shop.shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('shop.shopping-cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function getReduceByOne($id)
    {
      $oldCart = Session::has('cart') ? Session::get('cart') : null;
      $cart = new Cart($oldCart);
      $cart->reduceByOne($id);

      Session::put('cart',$cart);
      return redirect()->route('product.shoppingCart');
    }

    public function getRemoveItem($id)
    {
      $oldCart = Session::has('cart') ? Session::get('cart') : null;
      $cart = new Cart($oldCart);
      $cart->removeItem($id);

      Session::put('cart',$cart);
      return redirect()->route('product.shoppingCart');

    }

    public function getCheckout()
    {
          if(!Session::has('cart'))
        {
            return view('shop.shopping-cart');
        }

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;

        return view('shop.checkout',['total' => $total]);
    }

    public function postCheckout(Request $request)
    {
        if(!Session::has('cart'))
      {
          return redirect()->route('shop.shopping-cart');
      }
      $oldCart = Session::get('cart');
      $cart = new Cart($oldCart);

      Stripe::setApiKey('sk_test_MgCdLh2dJcFTzVUprOq5SE53');

      try{
        $charge = Charge::create(array(
          "amount" => $cart->totalPrice * 100,
          "currency" => "usd",
          // "source" => $request->input('stripeToken'), // obtained with Stripe.js
          "source" => "tok_1B74LjKDS6B8awjqc1Hvi6Gv",
          "description" => "Test Charge",
        ));
        $order = new Order();
        $order->cart = serialize($cart);
        $order->address = $request->input('address');
        $order->name = $request->input('name');
        $order->payment_id = $charge->id;

        Auth::user()->orders()->save($order);

      }catch(\Exception $e){
        return redirect()->route('checkout')->with('error', $e->getMessage());
      }

      Session::forget('cart');
      return redirect()->route('product.index')->with('success', 'Successfully purchased products');

    }
}
