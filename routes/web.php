<?php

use App\Http\Controllers\SocialiteController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/home', function () {
    return view('home');
})->name('home')->middleware('auth');

//Google認証のルーティング
Route::get('/redirect/{provider}', [SocialiteController::class, 'redirect']);
Route::get('/callback/{provider}', [SocialiteController::class, 'callback']);