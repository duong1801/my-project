<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Services\SocialAccountService;
class SocialAccountController extends Controller
{
    public function redirectToProvider($provider)
    {


        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback(SocialAccountService $service, $provider)
    {
        $user = $service->createOrGetUser(Socialite::driver($provider));
        Auth::login($user);

        return redirect()->to('/');
    }
}
