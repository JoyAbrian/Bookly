<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact-us', function () {
    return view('pages.contact-us');
});

Route::get('/register', function () {
    return view('pages.auth.register');
});

Route::get('/login', function () {
    return view('pages.auth.login');
});

Route::get('/dashboard', function () {
    return view('pages.dashboard.index');
});