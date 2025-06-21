<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('public.about');
});

Route::get('/service', function () {
    return view('public.service');
});

Route::get('/contact', function () {
    return view('public.contact');
});


