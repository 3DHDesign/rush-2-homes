<?php

namespace App\Livewire;

use App\Models\Client;
use Livewire\Attributes\Rule;
use Livewire\Component;

class UserLogin extends Component
{
    #[Rule('required|email')]
    public $email;

    #[Rule('required')]
    public $password;

    public function userLogin()
    {
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
