<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestimonialController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/service', function () {
    return view('service');
})->name('service');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/testimonial', [TestimonialController::class, 'index'])->name('testimonial');
Route::post('/testimonial/store', [TestimonialController::class, 'store'])->name('testimonials.store');

Route::get('/aboutus', function () {
    return view('aboutus');
})->name('aboutus');