<?php

use App\Http\Controllers\GuestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [GuestController::class, 'index']);


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
