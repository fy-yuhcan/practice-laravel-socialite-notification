<?php

namespace App\Http\Controllers;

use App\Services\SocialiteUserService;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    //認証のリダイレクト処理
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    //認証のコールバック処理
    public function callback($provider)
    {
        $user = Socialite::driver($provider)->user();
        dd($user);

        //socialiteUserServiceクラスのインスタンスを生成してfindOrCreateUserメソッドを呼び出す
        $socialiteUserService = new SocialiteUserService();
        $socialiteUserService->findOrCreateUser($user, $provider);
    }
}
