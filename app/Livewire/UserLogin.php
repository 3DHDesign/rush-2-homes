<?php

namespace App\Livewire;

use App\Models\Client;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Lunaweb\RecaptchaV3\Facades\RecaptchaV3;

class UserLogin extends Component
{
    #[Rule('required|email')]
    public $email;

    #[Rule('required')]
    public $password;

    #[Rule('required')]
    public $recaptchaResponse;

    public function userLogin()
    {
        dd($this->recaptchaResponse);
        $this->validate([
            'recaptchaResponse' => 'required|recaptcha', // You may need to adjust the validation rule based on your validation package
        ]);

        if (\Auth::guard('client')->attempt(['email' => $this->email, 'password' => $this->password, 'status' => '1'])) {
            return redirect()->route('user.dashboard.home');
        } else {
            $this->dispatch(
                'Swal:modal',
                icon: 'error',
                title: 'Login Error',
                text: 'Your login credentials are wrong! try again!'
            );
        }
    }


    public function render()
    {
        return view('livewire.user-login');
    }
}
