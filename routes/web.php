<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\QuyController;
use App\Http\Controllers\ChiTieuController;
use App\Http\Controllers\HomeController;


Route::get('/', [HomeController::class, 'index']);

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




Route::get('/QuanLyQuy', [QuyController::class, 'index']);


Route::get('/quan-ly-chi-tieu', [ChiTieuController::class, 'quanLyChiTieu'])
    ->name('quanlychitieu');

Route::get('/hu-chi-tieu', [ChiTieuController::class, 'huChiTieu'])
    ->name('huchitieu');
