<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasukController extends Controller
{
    //
    public function utama()
    {
        return 'Halo';
    }
    public function beranda()
    {
        return view('beranda');
    }
    public function login()
    {
        return view('login');
    }

    public function tabel()
    {
        return view('tabel');
    }

    public function dashboard()
    {
        return view('dashboard');
    }


}
