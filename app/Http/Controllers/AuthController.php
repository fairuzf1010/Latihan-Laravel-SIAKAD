<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use Alert;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AuthController extends Controller
{
    //

    use AuthenticatesUsers;


    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */


    public function login()
    {
        return view('auths.login');
    }

    public function postlogin(Request $request)
    {
        if(Auth::attempt($request->only('email','password')))
        {
            return redirect('/home')->with('success', 'Selamat Datang');
        }


        else {

            //Session::flash('gagal','Email Anda Belum Terdaftar atau Password / Email Anda Salah');
            return redirect('/login');
        }

        return redirect('/login')->with('success', 'Task Created Successfully!');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }







}
