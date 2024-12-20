<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

Route::middleware(['web'])->group(function () {
    Route::controller(WebController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/get-a-quote', 'landing')->name('landing');
        Route::post('/get-a-quote', 'submitQuote')->name('quote.submit');
        Route::get('/thank-you', 'thankyou')->name('thankyou');
        Route::get('/about-us', 'about')->name('about');
        Route::get('/301', 'redirect301')->name('301');

        Route::get('/packers-and-movers-dubai', 'pandm')->name('pandm');
        Route::get('/house-hold-storage-dubai', 'hhs')->name('services.hhs');
        Route::get('/box-storage-dubai', 'bs')->name('services.bs');
        Route::get('/office-storage-dubai', 'os')->name('services.os');

        Route::get('/contact-us', 'contact')->name('contact');
        Route::get('/why-choose-us', 'wcu')->name('wcu');
        Route::get('/privacy-policy', 'privacy')->name('privacy.policy');
        Route::get('/refresh/captcha', 'refreshCaptcha')->name('refresh.captcha');
        Route::post('/contact', 'contactSubmit')->name('contact.submit');
        Route::get('/blogs', 'blogs')->name('blogs');
        Route::get('/blogs/{slug}', 'blogDetails')->name('blog.details');
        Route::get('/sitemap.xml', 'sitemap')->name('sitemap');
        Route::get('/robots.txt', 'robots')->name('robots');

        Route::get('/blog/category/{category}', 'blogByCategory')->name('blog.by.category');
    });
});
Route::get('/services/packers-and-movers', function () {
    return redirect()->route('pandm');
});
Route::get('/services/house-hold-storage', function () {
    return redirect()->route('services.hhs');
});
Route::get('/services/box-storage', function () {
    return redirect()->route('services.bs');
});
Route::get('/services/office-storage', function () {
    return redirect()->route('services.os');
});
Route::get('/services/cart.html', function () {
    return redirect()->route('index');
});
Route::get('/services/checkout.html', function () {
    return redirect()->route('index');
});
Route::get('/cart.html', function () {
    return redirect()->route('index');
});
Route::get('/checkout.html', function () {
    return redirect()->route('index');
});
Route::get('/services/packers-and-movers-in-dubai', function () {
    return redirect()->route('301');
});
Route::get('/services/house-hold-storage-in-dubai', function () {
    return redirect()->route('301');
});
Route::get('/services/box-storage-in-dubai', function () {
    return redirect()->route('301');
});
Route::get('/services/office-storage-in-dubai', function () {
    return redirect()->route('301');
});
Route::middleware(['web', 'auth'])->group(function () {
    Route::controller(UserController::class)->group(function () {
        Route::get('/user', 'index')->name('user');
        Route::get('/user/create', 'create')->name('user.create');
        Route::post('/user/create', 'store')->name('user.save');
        Route::get('/user/edit/{id}', 'edit')->name('user.edit');
        Route::put('/user/edit/{id}', 'update')->name('user.update');
        Route::get('/user/delete/{id}', 'destroy')->name('user.delete');
        Route::get('/logout', 'logout')->name('user.logout');
    });
});
Route::middleware(['web', 'auth'])->group(function () {
    Route::controller(BlogController::class)->group(function () {
        Route::get('/blog', 'index')->name('blog');
        Route::get('/blog/create', 'create')->name('blog.create');
        Route::post('/blog/create', 'store')->name('blog.save');
        Route::get('/blog/edit/{id}', 'edit')->name('blog.edit');
        Route::put('/blog/edit/{id}', 'update')->name('blog.update');
        Route::get('/blog/delete/{id}', 'destroy')->name('blog.delete');
    });
});
Route::get('/login', function () {
    return view('user.login');
})->name('login');
Route::post('/login', [UserController::class, 'login'])->name('user.login');
