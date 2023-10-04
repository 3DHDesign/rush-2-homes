<?php

namespace App\Livewire;

use App\Mail\AgentContactMail;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\Rule;
use Livewire\Component;

class AgentContact extends Component
{

    public $property;

    #[Rule('required|string|min:3')]
    public $name;

    #[Rule('required|string|min:5|email')]
    public $email;

    #[Rule('required|numeric|digits:10')]
    public $number;

    #[Rule('required|string|min:3')]
    public $description;

    public function submitForm()
    {
        $this->validate();
        $data = [
            'name' => $this->name,
            'email' => $this->email,
            'number' => $this->number,
            'description' => $this->description,
            'property_code' => $this->property->property_code,
            'property_title' => $this->property->title,
        ];

        try {
            Mail::to($this->property->agent->email)->send(new AgentContactMail($data));
        } catch (Exception $e) {
            dd($e);
            $this->dispatch(
                'Swal:modal',
                icon: 'error',
                title: 'Please check your connection',
                text: 'Please check your internet connection and try again!'
            );
        }

        $this->reset();
        $this->dispatch(
            'Swal:modal',
            icon: 'success',
            title: 'Email sent successfully!',
            text: 'Email has been sent successfully! We will contact you soon.'
        );
    }

    public function render()
    {
        return view('livewire.agent-contact');
    }
}
