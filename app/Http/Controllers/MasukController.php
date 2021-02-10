<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

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
        if(Auth::check()) {

        return view('dashboard');
        }


        else{
            return redirect('login');
        }


    }





    public function profile()
    {
        if(Auth::check()) {

        return view('profile');
        }


        else{
            return redirect('login');
        }


    }










}
