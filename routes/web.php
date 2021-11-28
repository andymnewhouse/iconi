<?php

use Illuminate\Support\Facades\Route;

Route::get('/', App\Http\Livewire\Builder::class)->name('builder');
Route::get('/builder/{keyImage}', App\Http\Livewire\Builder::class)->name('builder');
Route::get('/preview/{keyImage}', App\Http\Livewire\Preview::class)->name('preview');
