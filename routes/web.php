<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ContactController;

// Ana Site Karşılama Sayfası
Route::get('/', function (Request $request) {
    ContactController::recordVisit($request);
    return view('welcome');
});

// Form Endpointleri
Route::post('/api/contact', [ContactController::class, 'storeContact'])->name('api.contact');
Route::post('/api/trial', [ContactController::class, 'storeTrial'])->name('api.trial');