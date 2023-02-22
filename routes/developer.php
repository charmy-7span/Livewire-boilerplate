<?php

use Illuminate\Support\Facades\Route;

Route::get('login', \App\Http\Livewire\Developer\Login::class);
Route::get('/dashboard', \App\Http\Livewire\Developer\Dashboard::class)->name('developer.dashboard')->middleware('developer');
