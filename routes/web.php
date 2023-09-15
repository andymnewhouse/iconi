<?php

use Illuminate\Support\Facades\Route;

Route::get('builder', App\Livewire\Builder::class);
Route::get('builder/{keyImage?}', App\Livewire\Builder::class)->name('builder');
Route::get('builder/{keyImage}/preview', App\Livewire\Preview::class)->name('preview');

Route::get('dashboard', App\Livewire\Dashboard::class)->name('dashboard');
