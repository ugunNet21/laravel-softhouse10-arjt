<?php

use App\Http\Controllers\Admin\DashboadController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignUpController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/home', [DashboadController::class, 'index']);
Route::get('/signin', [LoginController::class, 'index']);
Route::get('/sign-up', [SignUpController::class, 'index']);
