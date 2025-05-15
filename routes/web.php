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

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/testimonial', function () {
    return view('testimonial');
})->name('testimonial');

Route::get('/aboutus', function () {
    return view('aboutus');
})->name('aboutus');