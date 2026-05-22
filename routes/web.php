<?php

use Illuminate\Support\Facades\Route;
Artisan::call('storage:link');
Route::get('/', function () {
    return view('welcome');
});
