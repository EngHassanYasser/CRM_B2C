<?php

use Illuminate\Support\Facades\Route;

Route::livewire('/', 'pages.lead')->name('leads.index');
Route::livewire('/erpsettings', 'pages.erpsettings')->name('erpsettings.index');
Route::livewire('/users', 'pages.users')->name('users.index');
Route::livewire('/activities', 'pages.activities')->name('activities.index');
Route::livewire('/tasks', 'pages.tasks')->name('tasks.index');
Route::livewire('/deals', 'pages.deals')
    ->name('deals.index');
Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});
require __DIR__.'/settings.php';
