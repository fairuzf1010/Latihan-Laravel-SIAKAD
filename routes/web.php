<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

use RealRashid\SweetAlert\Facades\Alert;

Route::get('/', function () {

    Alert::success('Success Title');
    return view('landing');
});



/*
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home'); */
Route::get('/register','Auth\RegisterController@register')->name('register');
Route::get('/login','Auth\LoginController@login')->name('login');
Route::get('/logout','Auth\LoginController@logout');
Route::post('/postlogin','Auth\LoginController@postlogin');
Route::post('/register','Auth\RegisterController@createUser');

// Auth::routes();

Route::get('/beranda', 'MasukController@beranda');
Route::get('/utama','MasukController@utama');
Route::get('/tabel','MasukController@tabel');
Route::get('/home','MasukController@dashboard')->middleware('auth');
Route::get('/profile','MasukController@profile')->middleware('auth');



//SISWA

Route::get('/profile','MasukController@profile');
Route::get('/siswa','SiswaController@index');
Route::post('/siswa/create','SiswaController@create');
Route::get('/siswa/{id}/edit','SiswaController@edit');
Route::post('/siswa/{id}/update','SiswaController@update');
Route::get('/siswa/{id}/delete','SiswaController@delete');
Route::get('/siswa/{id}/profile','SiswaController@profile');
Route::get('/siswa/exportexcel','SiswaController@exportExcel');
Route::get('/siswa/exportpdf','SiswaController@exportPdf');


Route::get('/guru/{id}/profile','GuruController@profile');

