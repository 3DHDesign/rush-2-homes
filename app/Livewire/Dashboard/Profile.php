<?php

namespace App\Livewire\Dashboard;

use App\Models\Client;
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

    public function store()
    {
        try {

            $user = auth()->guard('client')->user();
            $userModel = Client::find($user->id);

            $userModel->update([
                'name' => $this->name,
                'email' => $this->email,
                'number' => $this->number,
                'address' => $this->address,
            ]);

            $this->dispatch(
                'Swal:modal',
                icon: 'success',
                title: 'Updated',
                text: 'Your have registered successfully!',
            );
        } catch (\Exception $e) {
            $this->dispatch(
                'Swal:modal',
                icon: 'error',
                title: 'Error! try again',
                text: 'Please check your connection and try again!'
            );
        }
    }

    public function render()
    {
        return view('livewire.dashboard.profile');
    }
}
