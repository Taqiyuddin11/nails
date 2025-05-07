<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/service', function () {
    return view('service');
})->name('service');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::view('/blog', 'blog')->name('blog');
Route::view('/testimonial', 'testimonial')->name('testimonial');
Route::view('/aboutus', 'aboutus')->name('aboutus');