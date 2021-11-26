<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Foundation\Mayaye;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');

Artisan::command('mayaye', function(){
    $this->comment(Mayaye::fikir());
})->describe('Yene hulu neger');
