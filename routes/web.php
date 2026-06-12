<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/global_layout/navbar', function () {
    return view('global_layout.navbar');
});

Route::get('/global_layout/footer', function () {
    return view('global_layout.footer');
});

Route::get('/global_layout/header', function () {
    return view('global_layout.header');
});

