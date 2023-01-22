<?php

namespace TwillContactForm\Twill\Capsules\ContactFormSubmissions\Repositories;

use A17\Twill\Repositories\ModuleRepository;
use TwillContactForm\Twill\Capsules\ContactFormSubmissions\Models\ContactFormSubmission;

class ContactFormSubmissionRepository extends ModuleRepository
{
    public function __construct(ContactFormSubmission $model)
    {
        $this->model = $model;
    }
}
