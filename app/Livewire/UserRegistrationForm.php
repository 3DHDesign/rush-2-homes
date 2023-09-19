<?php

namespace App\Livewire;

use App\Models\Client;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Rule;
use Livewire\Component;

class UserRegistrationForm extends Component
{
    #[Rule('required|email|unique:users')]
    public $email;

    #[Rule('required|string')]
    public $name;

    #[Rule('required|min:6')]
    public $password;

    #[Rule('required_with:password|same:password')]
    public $password_confirmation;

    public function save()
    {
        $this->validate();

        Client::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'status' => 1,
            'avatar' => null,
        ]);

        // Optional: You can add a notification or redirect here

        $this->reset(['name', 'email', 'password', 'password_confirmation']);
    }

    public function render()
    {
        return view('livewire.user-registration-form');
    }
}
