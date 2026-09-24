<?php

use App\Http\Controllers\AdminController;
use App\Http\Middleware\EnsureUserIsAdmin;
use Illuminate\Support\Facades\Route;

$adminPath = config('app.admin_path');

Route::prefix($adminPath)->name('admin.')->group(function () {
    Route::get('login', [AdminController::class, 'login'])
        ->name('login');

    Route::post('login', [AdminController::class, 'authenticate'])
        ->middleware('throttle:5,1')
        ->name('login.store');

    Route::middleware(EnsureUserIsAdmin::class)->group(function () {
        Route::get('/', [AdminController::class, 'dashboard'])
            ->name('dashboard');

        Route::post('logout', [AdminController::class, 'logout'])
            ->name('logout');
    });
});
