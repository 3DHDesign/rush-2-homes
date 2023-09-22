<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;

class LoginButtons extends Component
{
    public function logout(Request $request)
    {
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        \Auth::guard('client')->logout();

        return redirect()->route('home');
    }

    public function render()
    {
        return view('livewire.login-buttons');
    }
}
