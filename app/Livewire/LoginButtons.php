<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;

class LoginButtons extends Component
{
    public function logout(Request $request)
    {
        \Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home');
    }

    public function render()
    {
        return view('livewire.login-buttons');
    }
}
