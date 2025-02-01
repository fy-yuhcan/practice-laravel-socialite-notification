<?php

use App\Http\Controllers\SocialiteController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

Route::get('/', function () {
    return view('welcome');
});

//Google認証のルーティング
Route::get('/redirect/{provider}', [SocialiteController::class, 'redirect']);
Route::get('/callback/{provider}', [SocialiteController::class, 'callback']);