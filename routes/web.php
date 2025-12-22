<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('landing');

// Contact Submit
Route::post('/contact/submit', [ContactController::class, 'store'])->name('contact.submit');

// Sitemap
Route::get('/sitemap.xml', [\App\Http\Controllers\SitemapController::class, 'index']);
