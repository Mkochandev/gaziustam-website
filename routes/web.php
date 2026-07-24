<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ContactController;

// Main Landing Page with Traffic Tracking
Route::get('/', function (Request $request) {
    ContactController::recordVisit($request);
    return view('welcome');
});

// API Form Endpoints
Route::post('/api/contact', [ContactController::class, 'storeContact'])->name('api.contact');
Route::post('/api/trial', [ContactController::class, 'storeTrial'])->name('api.trial');

// Redirect legacy /talepler to /admin
Route::get('/talepler', function () {
    return redirect()->route('admin.dashboard');
});

// Admin Panel Dashboard & Actions
Route::get('/admin', [ContactController::class, 'index'])->name('admin.dashboard');
Route::post('/admin/profile', [ContactController::class, 'updateProfile'])->name('admin.profile.update');

// Admin Auth Routes
Route::get('/admin/login', [ContactController::class, 'showLoginForm'])->name('admin.login.form');
Route::post('/admin/login', [ContactController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [ContactController::class, 'logout'])->name('admin.logout');
