<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['guest' => true]);
})->name('home');

Route::get('/chuyen-tien', function () {
    return view('wallet.transfer');
})->name('wallet.transfer');

Route::get('/nap-tien', function () {
    return view('wallet.deposit');
})->name('wallet.deposit');

Route::get('/rut-tien', function () {
    return view('wallet.withdraw');
})->name('wallet.withdraw');
