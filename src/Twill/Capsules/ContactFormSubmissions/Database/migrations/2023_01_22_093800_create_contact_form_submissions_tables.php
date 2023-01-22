<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactFormSubmissionsTables extends Migration
{
    public function up(): void
    {
        Schema::create('contact_form_submissions', function (Blueprint $table) {
            createDefaultTableFields($table);

            $table->string('subject')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->text('content')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contact_form_submissions');
    }
}
