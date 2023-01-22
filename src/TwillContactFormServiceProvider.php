<?php

namespace TwillContactForm;

use A17\Twill\TwillPackageServiceProvider;
use Livewire\Livewire;
use TwillContactForm\Livewire\ContactForm;

class TwillContactFormServiceProvider extends TwillPackageServiceProvider
{
    public function boot(): void
    {
        parent::boot();

        $this->loadViewsFrom(
            __DIR__ . DIRECTORY_SEPARATOR . 'resources' . DIRECTORY_SEPARATOR . 'views',
            'twill-contact-form'
        );

        \A17\Twill\Facades\TwillBlocks::registerComponentBlocks(
            '\\TwillContactForm\\Views\\Components\\Twill',
            __DIR__ . DIRECTORY_SEPARATOR . 'Views' . DIRECTORY_SEPARATOR . 'Components' . DIRECTORY_SEPARATOR . 'Twill'
        );

        $this->publishes([
            __DIR__ . DIRECTORY_SEPARATOR . 'resources' . DIRECTORY_SEPARATOR . 'views' => resource_path('views/vendor/twill-contact-form'),
        ], 'twill-contact-form');

        Livewire::component('twill-contact-form::contact-form', ContactForm::class);
    }
}
