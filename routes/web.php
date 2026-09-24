<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

Route::view('/my-account', 'frontend/my-account')
    ->middleware('auth')
    ->name('my-account');

require __DIR__.'/admin.php';
