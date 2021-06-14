<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
 
Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('Hello2', function () {
    $this->comment('This command is from console');
})->purpose('Hello to the user');