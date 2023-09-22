<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Exception;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class FacebookAuthController extends Controller
{
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleFacebookCallback()
    {
        try {

            $user = Socialite::driver('facebook')->user();

            $finduser = Client::where('facebook_id', $user->id)->first();

            if ($finduser) {

                \Auth::guard('client')->login($finduser);

                return redirect()->route('user.dashboard.home');
            } else {
                $newUser = Client::updateOrCreate(['email' => $user->email], [
                    'name' => $user->name,
                    'facebook_id' => $user->id,
                    'password' => encrypt('admin@123')
                ]);

                \Auth::guard('client')->login($newUser);

                return redirect()->route('user.dashboard.home');
            }
        } catch (Exception $e) {
            // dd($e->getMessage());
            $this->dispatch(
                'Swal:modal',
                icon: 'error',
                title: 'Login Error',
                text: 'Your login credentials are wrong! try again!'
            );

            return redirect()->route('user.account.login');
        }
    }
}
