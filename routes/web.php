<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/global_layout/navbar', function () {
    return view('global_layout.navbar');
});

Route::get('/global_layout/footer', function () {
    return view('global_layout.footer');
});

