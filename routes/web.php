<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::get('/', [ContactController::class, 'index'])->name('index');

Route::get('/index', function () {
    return redirect('/');
});

Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');

Route::post('/login', [AuthenticatedSessionController::class, 'store']);

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [ContactController::class, 'dashboard'])->name('contacts.index');
    Route::resource('contacts', ContactController::class)->except('index');
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});
