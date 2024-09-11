<?php

use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

Route::middleware(['web'])->group(function () {
    Route::controller(WebController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/landing', 'landing')->name('landing');
        Route::get('/about-us', 'about')->name('about');
        Route::get('/services/packers-and-movers', 'pandm')->name('pandm');
        Route::get('/services/house-hold-storage', 'hhs')->name('services.hhs');
        Route::get('/services/box-storage', 'bs')->name('services.bs');
        Route::get('/services/office-storage', 'os')->name('services.os');
        Route::get('/contact-us', 'contact')->name('contact');
        Route::get('/why-choose-us', 'wcu')->name('wcu');
        Route::get('/privacy-policy', 'privacy')->name('privacy.policy');
        Route::get('/refresh/captcha', 'refreshCaptcha')->name('refresh.captcha');
        Route::post('/contact', 'contactSubmit')->name('contact.submit');
        Route::get('/blogs', 'blogs')->name('blogs');
    });
});
