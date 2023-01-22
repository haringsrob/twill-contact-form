<?php

namespace TwillContactForm\Twill\Capsules\ContactFormSubmissions\Models;

use A17\Twill\Models\Model;

class ContactFormSubmission extends Model
{
    protected $fillable = [
        'published',
        'subject',
        'content',
        'phone',
        'email',
    ];
}
