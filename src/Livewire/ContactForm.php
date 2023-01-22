<?php

namespace TwillContactForm\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;
use TwillContactForm\Twill\Capsules\ContactFormSubmissions\Repositories\ContactFormSubmissionRepository;

class ContactForm extends Component
{
    public bool $withPhoneNumber = true;
    public string $successMessage = '';

    public string $email = '';
    public string $phone = '';
    public string $subject = '';
    public string $content = '';

    public bool $success = false;

    protected function getRules()
    {
        $rules = [
            'subject' => ['required'],
            'email' => ['required', 'email'],
            'content' => ['required'],
        ];

        if ($this->withPhoneNumber) {
            $rules['phone'] = ['required'];
        }

        return $rules;
    }

    public function save(): void
    {
        $this->validate();

        $repository = app(ContactFormSubmissionRepository::class);

        $repository->create([
            'email' => $this->email,
            'phone' => $this->phone,
            'subject' => $this->subject,
            'content' => $this->content,
        ]);

        $this->success = true;
    }

    public function render(): View
    {
        return view('twill-contact-form::livewire.contact-form');
    }
}
