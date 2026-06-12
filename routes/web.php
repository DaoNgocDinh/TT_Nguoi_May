<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\QuyController;

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

Route::get('/global_layout/body', function () {
    return view('global_layout.body');
});

Route::get('/QuanLyQuy', [QuyController::class, 'index']);