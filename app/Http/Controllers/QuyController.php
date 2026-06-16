<?php

namespace App\Http\Controllers;

class QuyController extends Controller
{
    public function index()
    {
        $json = file_get_contents(
            public_path('data/quy.json')
        );

        $quys = json_decode($json, true);

        return view('QuanLyQuy.index', [
            'quys' => $quys
        ]);
    }
}