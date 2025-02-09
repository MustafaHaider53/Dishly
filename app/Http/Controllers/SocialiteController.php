<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SocialiteController extends Controller
{
    // Redirect to Google
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->stateless()->redirect();
    }

    // Handle Google callback
    public function handleGoogleCallback()
    {
        $socialUser = Socialite::driver('google')->user();

        $user = User::updateOrCreate([
            'email' => $socialUser->email,
        ], [
            'name' => $socialUser->name,
            'provider_id' => $socialUser->id,
            'provider' => 'google',
            'email_verified_at' => now(),
        ]);

        Auth::login($user);

        return redirect('/');
    }


    

    // Repeat for Facebook
 
}