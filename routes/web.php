<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/profile', function () {
    return view('profile', ['title' => 'Profile']);
});

Route::get('/services', function () {
    return view('services', ['title' => 'Services']);
});

Route::get('/articles', function () {
    return view('article', ['title' => 'Articles']);
});
Route::get('/articles-detail', function () {
    return view('article-detail', ['title' => 'Articles']);
});

Route::get('/contact-us', function () {
    return view('contact-us', ['title' => 'Contact Us']);
});
