<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/profile', [ProfileController::class, 'profile']);

Route::get('/', function () {
    return view('welcome');
});
