<?php

use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment('Keep building simple, useful systems.');
})->purpose('Display an inspiring message');
