<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/api/contact', [ContactController::class, 'storeContact'])->name('api.contact');
Route::post('/api/trial', [ContactController::class, 'storeTrial'])->name('api.trial');

// Protected Admin Routes
Route::get('/talepler', [ContactController::class, 'index'])->name('admin.talepler');

// Admin Auth Routes
Route::get('/admin/login', [ContactController::class, 'showLoginForm'])->name('admin.login.form');
Route::post('/admin/login', [ContactController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [ContactController::class, 'logout'])->name('admin.logout');
