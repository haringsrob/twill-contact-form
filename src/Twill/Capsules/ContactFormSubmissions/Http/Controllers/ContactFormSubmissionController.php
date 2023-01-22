<?php

namespace TwillContactForm\Twill\Capsules\ContactFormSubmissions\Http\Controllers;

use A17\Twill\Models\Contracts\TwillModelContract;
use A17\Twill\Services\Listings\Columns\Text;
use A17\Twill\Services\Listings\TableColumns;
use A17\Twill\Services\Forms\Fields\Input;
use A17\Twill\Services\Forms\Form;
use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class ContactFormSubmissionController extends BaseModuleController
{
    protected $moduleName = 'contactFormSubmissions';

    protected function setUpController(): void
    {
        $this->disablePermalink();
        $this->disableCreate();
        $this->setTitleColumnKey('subject');
    }

    public function getForm(TwillModelContract $model): Form
    {
        $form = parent::getForm($model);

        $form->add(
            Input::make()->name('phone')->label('Phone')
        );

        $form->add(
            Input::make()->name('email')->label('Email')
        );

        $form->add(
            Input::make()->name('subject')->label('Subject')
        );

        $form->add(
            Input::make()->name('content')->label('Message')->type('textarea')
        );

        return $form;
    }

    protected function additionalIndexTableColumns(): TableColumns
    {
        $table = parent::additionalIndexTableColumns();

        $table->add(
            Text::make()->field('phone')->title('Phone')
        );

        $table->add(
            Text::make()->field('email')->title('Email')
        );

        return $table;
    }
}
