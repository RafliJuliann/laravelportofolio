<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/home.blade.php', function () {
    return view('home');
});

Route::get('/aboutme.blade.php', function () {
    return view('aboutme');
});

Route::get('/award.blade.php', function () {
    return view('award');
});

Route::get('/contact.blade.php', function () {
    return view('contact');
});


