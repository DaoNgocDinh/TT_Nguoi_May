<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuyController;
use App\Http\Controllers\ChiTieuController;
use App\Http\Controllers\HomeController;



Route::get('/', [HomeController::class, 'index'])->name('home');

Route::view('/thanh-toan-hoa-don', 'ThanhToanHoaDon.index');
Route::view('/thanh-toan-hoa-don/loai-hoa-don', 'ThanhToanHoaDon.loai-hoa-don');
Route::view('/thanh-toan-hoa-don/tra-cuu', 'ThanhToanHoaDon.tra-cuu');
Route::view('/thanh-toan-hoa-don/quet-qr', 'ThanhToanHoaDon.quet-qr');
Route::view('/thanh-toan-hoa-don/xac-nhan', 'ThanhToanHoaDon.xac-nhan');
Route::view('/thanh-toan-hoa-don/xac-thuc', 'ThanhToanHoaDon.xac-thuc');
Route::view('/thanh-toan-hoa-don/thanh-cong', 'ThanhToanHoaDon.thanh-cong');

Route::view('/nap-tien-dien-thoai', 'NapTienDienThoai&Data.index');
Route::view('/nap-tien-dien-thoai/nha-mang', 'NapTienDienThoai&Data.nha-mang');
Route::view('/nap-tien-dien-thoai/so-dt', 'NapTienDienThoai&Data.so-dt');
Route::view('/nap-tien-dien-thoai/chon-goi', 'NapTienDienThoai&Data.chon-goi');
Route::view('/nap-tien-dien-thoai/xac-nhan', 'NapTienDienThoai&Data.xac-nhan');
Route::view('/nap-tien-dien-thoai/xac-thuc', 'NapTienDienThoai&Data.xac-thuc');
Route::view('/nap-tien-dien-thoai/thanh-cong', 'NapTienDienThoai&Data.thanh-cong');

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


Route::get('/quan-ly-chi-tieu', [ChiTieuController::class, 'quanLyChiTieu'])
    ->name('quanlychitieu');

Route::get('/hu-chi-tieu', [ChiTieuController::class, 'huChiTieu'])
    ->name('huchitieu');
