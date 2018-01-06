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

// use Illuminate\Support\Facades\DB;
// use App\Shop;

// $shops = DB::table('shops')->get();


    //    return view('shops', ['shops' => $shops]);



Route::get('/', function () {
//   // return view('welcome');
    return view('home');
//    // return view('homepage');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/shops', 'StorefrontController');
//Route::resource('shops', 'StorefrontController');

//tijdelijke route voor testen storefront.blade.php 
Route::get('/shop', function() {
    return view('storefront');
});