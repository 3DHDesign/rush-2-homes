<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class UserRegistrationForm extends Component
{
    public $email;
    public $name;
    public $password;

    public function save()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ]);
        
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        // Optional: You can add a notification or redirect here

        $this->reset(['name','email', 'password', 'confirmPassword']);
    }

    public function render()
    {
        return view('livewire.user-registration-form');
    }
}
