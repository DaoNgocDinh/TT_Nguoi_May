<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChiTieuController extends Controller
{
    public function quanLyChiTieu()
    {
        return view('Quanlychitieu.quanlychitieu');
    }

    public function huChiTieu()
    {
        return view('Huchitieu.huchitieu');
    }
}
