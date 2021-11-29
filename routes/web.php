<?php

use Illuminate\Support\Facades\Route;

Route::get('/builder', App\Http\Livewire\Builder::class);
Route::get('/builder/{keyImage?}', App\Http\Livewire\Builder::class)->name('builder');
Route::get('/builder/{keyImage}/preview', App\Http\Livewire\Preview::class)->name('preview');

Route::get('/dashboard', App\Http\Livewire\Dashboard::class)->name('dashboard');
