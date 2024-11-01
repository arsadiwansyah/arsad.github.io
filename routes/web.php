<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', ['nama' => 'arsadiwanyah']);
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/contact', function () {
    return view('contact');
});