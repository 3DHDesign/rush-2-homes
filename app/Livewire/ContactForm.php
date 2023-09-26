<?php

namespace App\Livewire;

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\Rule;
use Livewire\Component;

class ContactForm extends Component
{
    #[Rule('required|string|min:3')]
    public $name;

    #[Rule('integer|min:9')]
    public $number;

    #[Rule('required|email|min:5')]
    public $email;

    #[Rule('required|string|min:3')]
    public $subject;

    #[Rule('required|string|min:3')]
    public $description;

    public function sendMail()
    {
        $this->validate();
        $data = [
            'name' => $this->name,
            'number' => $this->number,
            'email' => $this->email,
            'subject' => $this->subject,
            'description' => $this->description,
        ];

        try {
            Mail::to('info@rush2homes.com')->send(new ContactMail($data));
        } catch (\Exception $e) {
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
        return view('livewire.contact-form');
    }
}
