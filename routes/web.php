<?php

use Illuminate\Support\Facades\Route;

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

/////////duonghaidang
 Route ::get('/huchitieu', function () {
    return view('Huchitieu.huchitieu');
 });
Route::get('/quanlychitieu', function () {
    return view('Quanlychitieu.quanlychitieu'); 
});