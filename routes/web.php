<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [
  'uses' => 'HomeController@welcome',
  'as' => 'welcome'
  ]);

Route::get('/home', [
  'uses' => 'HomeController@index',
  'as' => 'home'
  ]);

Route::get('/purpose',[
  'uses' => 'HomeController@purpose',
  'as' => 'purpose'
]);

Route::post('/purpose',[
  'uses' => 'HomeController@postPurpose',
  'as' => 'purpose'
]);

Route::get('/checkout',[
  'uses' => 'ProductController@getCheckout',
  'as' => 'checkout'
]);

Route::post('/checkout',[
  'uses' => 'ProductController@postCheckout',
  'as' => 'checkout'
]);

Route::get('auth/facebook', 'Auth\LoginController@redirectToFacebook');
Route::get('auth/facebook/callback', 'Auth\LoginController@handleFacebookCallback');

Auth::routes();

// Route::get('/home', 'HomeController@index');

Route::group(['middleware' => 'auth'],function()
{
  Route::get('/profile/{slug}',[
    'uses' => 'ProfilesController@index',
    'as' => 'profile',
  ]);

  Route::get('/profile/edit/profile',[
    'uses' => 'ProfilesController@edit',
    'as' => 'profile.edit'
  ]);

  Route::post('/profile/update/profile',[
    'uses' => 'ProfilesController@update',
    'as' => 'profile.update'
  ]);

   Route::get('/portfolio/add',[
    'uses' => 'ProductController@AddToPortfolio',
    'as' => 'portfolio.add'
  ]);

  Route::get('/portfolio/view/{id}',[
   'uses' => 'ProductController@ShowPortfolio',
   'as' => 'portfolio.view'
 ]);

  Route::post('/portfolio/add/portfolio',[
    'uses' => 'ProductController@store',
    'as' => 'portfolio.store'
  ]);

  Route::get('/shop', [
  'uses' => 'ProductController@getIndex',
  'as' => 'product.index'
  ]);

  Route::get('/filter/{id}', [
  'uses' => 'ProductController@filterShop',
  'as' => 'filter'
  ]);

  Route::get('/add-to-cart/{id}',[
    'uses' => 'ProductController@getAddToCart',
    'as' => 'product.addToCart'
  ]);

  Route::get('/reduce/{id}',[
    'uses' => 'ProductController@getReduceByOne',
    'as' => 'product.reduceByOne'
  ]);

  Route::get('/remove/{id}',[
    'uses' => 'ProductController@getRemoveItem',
    'as' => 'product.remove'
  ]);

  Route::get('/shopping-cart',[
    'uses' => 'ProductController@getCart',
    'as' => 'product.shoppingCart'
  ]);

  Route::get('/download/{id}',[
    'uses' => 'ProductController@download',
    'as' => 'product.download'
  ]);

  Route::get('/delete/{id}',[
    'uses' => 'ProductController@delete',
    'as' => 'product.delete'
  ]);
  Route::get('/check_relationship_status/{id}', [
    'uses' => 'FriendshipsController@check',
    'as' => 'check'
  ]);

  Route::get('/add_friend/{id}', [
    'uses' => 'FriendshipsController@add_friend',
    'as' => 'add_friend'
  ]);

  Route::get('/follow/{id}', [
    'uses' => 'FriendshipsController@follow',
    'as' => 'follow'
  ]);

  Route::get('/unfollow/{id}', [
    'uses' => 'FriendshipsController@unfollow',
    'as' => 'unfollow'
  ]);

  Route::get('/accept_friend/{id}', [
    'uses' => 'FriendshipsController@accept_friend',
    'as' => 'accept_friend'
  ]);

  Route::get('/get_strangers',[
    'uses' => 'FeedsController@get_Strangers',
    'as' => 'get_strangers'
  ]);

  Route::get('/explore', [
  'uses' => 'FeedsController@getIndex',
  'as' => 'friendships.explore'
  ]);

  Route::get('get_unread',function(){
    return Auth::user()->unreadNotifications;
  });

    Route::get('/notifications', [
    'uses' => 'HomeController@notifications',
    'as' => 'notifications'
  ]);

    Route::post('/create/post',[
      'uses' => 'PostsController@store'
    ]);

    Route::get('/feed',[
      'uses' => 'FeedsController@feed',
      'as' => 'feed'
    ]);

    Route::get('/get_auth_user_data', function(){
      return Auth::user();
    });

    Route::get('/like/{id}',[
      'uses' => 'LikesController@like'
    ]);

    Route::get('/unlike/{id}',[
      'uses' => 'LikesController@unlike'
    ]);

    Route::post('/create/comment/{id}',[
      'uses' => 'CommentController@comment'
    ]);

    Route::get('/hide_comment',[
      'uses' => 'CommentController@hide_comment'
    ]);

    Route::get('/commentThread/{id}',[
      'uses' => 'CommentThreadController@thread',
      'as' => 'commentThread'
    ]);

    //Image upload routes

    Route::get('/list', 'PostsController@list');

    //get image from storage
    Route::get('storage/artwork/{id}','PostsController@artwork');

    /*Get image for download*/
    Route::get('storage/download/{id}','ProductController@download');

    Route::post('/upload', 'PostsController@upload');

    Route::get('/myImages/{id}',[
      'uses' => 'ProfilesController@myImages',
      'as' => 'myImages'
    ]);

    Route::get('/viewImage/{id}',[
      'uses' => 'ProfilesController@viewImage',
      'as' => 'viewImage'
    ]);


    Route::get('/purpose',[
      'uses' => 'HomeController@purpose',
      'as' => 'purpose'
    ]);

    Route::post('/purpose',[
      'uses' => 'HomeController@postPurpose',
      'as' => 'purpose'
    ]);

    Route::get('/checkout',[
      'uses' => 'ProductController@getCheckout',
      'as' => 'checkout'
    ]);

    Route::post('/checkout',[
      'uses' => 'ProductController@postCheckout',
      'as' => 'checkout'
    ]);

});
