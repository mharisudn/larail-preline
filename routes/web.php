<?php

use App\Http\Controllers\Pages\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'pages.profile')
    ->middleware(['auth'])
    ->name('profile');

Route::name('admin.')->middleware(['auth'])
    ->group(function () {
        Volt::route('user', 'user.index')->name('user');
});

require __DIR__.'/auth.php';
