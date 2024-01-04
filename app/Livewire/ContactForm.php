<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;

class ContactForm extends Component
{
    #[Validate('required', message: 'Name is incorrect')]
    #[Validate('min:3', message: 'Name must be at least 3 chars')]
    public $name;
    #[Validate('email', message: 'Email is incorrect')]
    public $email;
    #[Validate('digits:10', message: 'Phone is incorrect')]
    public $phone;
    #[Validate('required', message: 'Message is incorrect')]
    #[Validate('min:3', message: 'Message must be at least 3 chars')]
    public $message;

    public function submitForm()
    {
        $contacts = [
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'message' => $this->message,
        ];

        $this->validate();

        return back()->with('success_message', 'We received your message successfully and will get back to you shortly!');
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
