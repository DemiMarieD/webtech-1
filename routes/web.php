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

//Route::get('images/{imagename}', 'ImageController@get');

Route::get('/', function () {
    return view('home');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/about', function () {
    return view('about');
});

Route::post('/contact/submit', 'MessageController@submit'); 
 
Route::resource('/shop', 'ProductController'); 

Auth::routes();
Route::get('/dashboard', 'DashboardController@index');
