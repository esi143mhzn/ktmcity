<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['namespace' => 'Frontend', 'as' => 'frontend.'], function() {
    // Route::get('/', 'FrontendController@food')->name('food');
    Route::get('/food', 'FrontendController@food')->name('food');
    Route::get('/destination', 'FrontendController@destination')->name('destination');
    Route::get('/hotel', 'FrontendController@hotel')->name('hotel');
    Route::get('/organisational-structure', 'FrontendController@organisationalStructure')->name('organisational-structure');
    Route::post('/book-ride', 'FrontendController@bookRide')->name('book-ride');
    Route::post('/register', 'FrontendController@register')->name('register');
});

Route::get('/', function () {
    return view('/frontend/home');
});

// Route::get('/food', function () {
//     return view('/frontend/food');
// });

// Route::get('/destination', function () {
//     return view('/frontend/destination');
// });

Route::get('/userlogin', function () {
    return view('/frontend/auth/login');
});

Route::get('/register', function () {
    return view('/frontend/auth/register');
});

Route::get('/ride', function () {
    return view('/frontend/ride');
});

Route::get('/guide', function () {
    return view('/frontend/guide');
});

Route::get('/contact', function () {
    return view('/frontend/contact');
});

Route::get('/destination-detail', function () {
    return view('/frontend/destination-detail');
});


Route::get('/pay', function () {
    return view('/frontend/pay');
});

Route::group(['prefix' => 'backend', 'namespace' => 'Backend', 'as' => 'backend.', 'middleware' => 'auth'], function() {
    Route::get('/', function() {
        return redirect()->route('backend.food.index');
    })->name('dashboard.index');

    Route::resource('user', 'UserController');
    Route::resource('food', 'FoodController');
    Route::resource('destination', 'DestinationController');
    Route::resource('hotel', 'HotelController');
    Route::resource('bookride', 'BookRideController');
});

/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/login', [
    'uses' => 'Backend\AuthController@getLogin',
    'as' => 'backend.auth.login'
]);
Route::post('/login', [
    'uses' => 'Backend\AuthController@postLogin',
    'as' => 'backend.auth.login'
]);
Route::get('/logout', [
    'uses' => 'Backend\AuthController@getLogout',
    'as' => 'backend.auth.logout'
]);
