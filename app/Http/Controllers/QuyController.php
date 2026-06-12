<?php

namespace App\Http\Controllers;

class QuyController extends Controller
{
    public function index()
    {
        $json = file_get_contents(
            storage_path('app/data/quy.json')
        );

        $quys = json_decode($json, true);

        return view('QuanLyQuy.index', [
            'quys' => $quys
        ]);
    }
}