<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('halaman.dashboard');
    }

    public function tabels()
    {
        return view('halaman.tabel');
    }

    public function data()
    {
        return view('halaman.data-tabel');
    }
}
