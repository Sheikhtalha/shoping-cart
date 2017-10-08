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


Route::get('/', [
    'uses'=>'productController@getIndex',
    'as'=>'product.index'
]);
Route::get('/contact-us',[
  'uses'=>'productController@contactUs',
  'as'=>'partials.contact-us'
]);
Route::get('/about',[
  'uses'=>'productController@about',
  'as'=>'partials.about'
]);
Route::get('/add-to-cart/{id}',[
   'uses'=>'productController@getAddToCart',
    'as'=>'product.addToCart'
]);

Route::get('/reduce/{id}',[
   'uses'=>'productController@getReduceByOne',
   'as'=>'product.reduceByOne'
  ]);

Route::get('/remove/{id}',[
   'uses'=>'productController@getRemoveItem',
   'as'=>'product.remove'
  ]);
Route::get('/add/{id}',[
  'uses'=>'productController@getAddByOne',
   'as'=>'product.addByOne'
  ]);

Route::get('/cart',[
    'uses'=>'productController@getCart',
    'as'=>'product.cart'
]);
Route::get('/checkout',[
    'uses'=>'productController@getCheckout',
    'as'=>'checkout',
    // 'middleware'=>'auth'

]);

Route::get('/cashOnDilevery',[
'uses'=>'productController@getCashOnDilevery',
'as'=>'cashOnDilevery'
]);
Route::post('/cashOnDilevery',[
'uses'=>'productController@postCashOnDilevery',
'as'=>'cashOnDilevery'
]);
 Route::post('/checkout',[
     'uses'=>'productController@postCheckout',
     'as'=>'checkout',
    // 'middleware'=>'auth'
 ]);


Route::group(['prefix'=>'user'],function(){
   Route::group(['middleware'=>'guest'],function (){

       Route::get('/signup', [
           'uses'=>'userController@getSignUp',
           'as'=>'user.SignUp'
       ]);
       Route::post('/signup', [
           'uses'=>'userController@postSignUp',
           'as'=> 'user.SignUp'
       ]);

       /*Route::post('/login',[
           'uses'=>'userController@postSignUp',
           'as'=> 'user.SignUp'
       ]);*/
       Route::get('/signin', [
           'uses'=>'userController@getSignIn',
           'as'=>'user.SignIn'
       ]);
       Route::post('/signin', [
           'uses'=>'userController@postSignIn',
           'as'=> 'user.SignIn'
       ]);
   });
   Route::group(['middleware'=>'auth'],function (){

       Route::get('/profile', [
           'uses'=>'userController@getprofile',
           'as'=>'user.profile'
       ]);

       Route::get('/logout',[
           'uses'=>'userController@getLogout',
           'as'=>'user.logout'
       ]);
   });


});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
