<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Exception;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class GoogleAuthController extends Controller
{
    public function signInwithGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callbackToGoogle()
    {
        try {

            $user = Socialite::driver('google')->user();

            $finduser = Client::where('gauth_id', $user->id)->first();

            if ($finduser) {

                \Auth::guard('client')->login($finduser);

                return redirect()->route('user.dashboard.home');
            } else {
                $newUser = Client::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'gauth_id' => $user->id,
                    'gauth_type' => 'google',
                    'password' => encrypt('admin@123')
                ]);

                \Auth::guard('client')->login($newUser);

                return redirect()->route('user.dashboard.home');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
