<?php

namespace TwillContactForm\Views\Components\Twill;

use A17\Twill\Models\Block;
use A17\Twill\Services\Forms\Fields\Checkbox;
use A17\Twill\Services\Forms\Fields\Wysiwyg;
use A17\Twill\Services\Forms\Form;
use A17\Twill\View\Components\Blocks\TwillBlockComponent;
use Illuminate\Contracts\View\View;

class ContactFormBlock extends TwillBlockComponent
{
    public static function getBlockTitle(?Block $block = null): string
    {
        return twillTrans('Contact form');
    }

    public function render(): View
    {
        return view('twill-contact-form::contact-form');
    }

    public function getTranslatableValidationRules(): array
    {
        return [
            'success_message' => 'required'
        ];
    }

    public function getForm(): Form
    {
        return Form::make([
            Checkbox::make()->name('show_phone_number')->default(true),
            Wysiwyg::make()->name('success_message')->translatable()
        ]);
    }
}
