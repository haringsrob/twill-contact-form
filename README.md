# Twill contact form

This Twill 3 package adds a block and livewire component for rendering a contact form.

It creates a backend model for storing the contact form submissions.

## Installation

`composer require haringsrob/twill-contact-form`

Then run migrations.

If your project is not yet using Livewire add `@livewireStyles` and `@livewireScripts` as documented here: https://laravel-livewire.com/docs/2.x/quickstart#install-livewire

That should be all that is required for making it work.

## Customization

This is a simple package that has not been made to customize heavily. You can publish
the views to override the form markup: `php artisan vendor:publish --tag=twill-contact-form`
