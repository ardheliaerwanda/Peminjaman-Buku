<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
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

Route::get('/index/{lang}', function ($lang) {
    App::setLocale($lang);
    return view('index');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/index/{lang}', 'App\Http\Controllers\AuthController@index')->name('index');
Route::get('/signup/{lang}', 'App\Http\Controllers\AuthController@signup')->name('signup');
Route::post('/signup/create', 'App\Http\Controllers\AuthController@create');
Route::get('/login/{lang}', 'App\Http\Controllers\AuthController@login')->name('login');
Route::post('/postlogin', 'App\Http\Controllers\AuthController@postlogin');

Route::middleware(['auth'])->group(function () {
    Route::get('/logout', 'App\Http\Controllers\AuthController@logout');

    Route::get('/home/{lang}', 'App\Http\Controllers\HomeController@index')->name('home.index');
    Route::get('/home/{id}/detail/{lang}', 'App\Http\Controllers\HomeController@detail');

    Route::get('/cart/{lang}', 'App\Http\Controllers\CartController@index')->name('cart.index');
    Route::get('/cart/rent/{ebook_id}', [CartController::class, 'rent'])->name('cart.rent');
    Route::get('/cart/remove/{ebook_id}', [CartController::class, 'remove'])->name('cart.remove');

    Route::get('/success/{lang}', function ($lang) {
        App::setLocale($lang);
        return view('cart.success');
    });

    Route::post('/order', [OrderController::class, 'store'])->name('order.store');

    Route::get('/profile/{lang}', 'App\Http\Controllers\ProfileController@index');
    Route::get('/profile/{id}/edit/{lang}', 'App\Http\Controllers\ProfileController@edit');
    Route::post('/profile/{id}/update', 'App\Http\Controllers\ProfileController@update');

    Route::get('/saved/{lang}', function ($lang) {
        App::setLocale($lang);
        return view('profile.saved');
    });

    Route::get('/account-maintenance/{lang}', 'App\Http\Controllers\MaintananceController@index');
    Route::get('/account-maintenance/{id}/edit/{lang}', 'App\Http\Controllers\MaintananceController@edit');
    Route::post('/account-maintenance/{id}/update/{lang}', 'App\Http\Controllers\MaintananceController@update');
    Route::get('/account-maintenance/{id}/delete', 'App\Http\Controllers\MaintananceController@delete');
});

Route::get('/log-out/{lang}', function ($lang) {
    App::setLocale($lang);
    return view('auths.logout');
});
