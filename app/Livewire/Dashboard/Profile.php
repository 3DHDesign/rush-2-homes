<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;

class Profile extends Component
{
    public $name;
    public $email;
    public $number;
    public $address;

    public function mount()
    {
        $this->name = auth()->guard('client')->user()->name ?? null;
        $this->email = auth()->guard('client')->user()->email ?? null;
        $this->number = auth()->guard('client')->user()->number ?? null;
        $this->address = auth()->guard('client')->user()->address ?? null;
    }

    public function render()
    {
        return view('livewire.dashboard.profile');
    }
}
