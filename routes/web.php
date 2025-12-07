<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

// Contact Submit
Route::post('/contact/submit', [ContactController::class, 'store'])->name('contact.submit');
