<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\SiswaExport;
use Maatwebsite\Excel\Facades\Excel;
use PDF;


class SiswaController extends Controller
{
    //
    public function index() {
    $data_siswa = \App\Siswa::all();
    return view('siswa.index', ['data_siswa'=>$data_siswa]);
    
    }

    public function create(Request $request)
    {
        \App\Siswa::create($request->all());
        return redirect('/siswa')->with('sukses','Data Berhasil Diinput');
    }

    public function edit($id)
    {
       $siswa = \App\Siswa::find($id);   
       return view('siswa.edit',['siswa' => $siswa]);
    }


    public function update(Request $request,$id)
    {   
        $siswa = \App\Siswa::find($id); 
        $siswa->update($request->all());
        if($request->hasFile('foto_siswa')){
            $request->file('foto_siswa')->move('gambar/',$request->file('foto_siswa')->getClientOriginalName());
            $siswa->foto_siswa = $request->file('foto_siswa')->getClientOriginalName();
            $siswa->save();
        }
        return redirect('/siswa')->with('sukses','Data Berhasil Diedit');

    }

    public function delete($id)
    {
        $siswa = \App\Siswa::find($id);
        $siswa->delete($siswa);
        return redirect('/siswa')->with('sukses','Data Berhasil Dihapus');
    }

    public function profile($id)
    {   $siswa = \App\Siswa::find($id);
        return view('siswa.profile',['siswa'=> $siswa]);
    }

    public function exportExcel() 
    {
        return Excel::download(new SiswaExport, 'Siswa.xlsx');
    }

    public function exportPdf()
    {   $siswa = \App\Siswa::all();
        $pdf = PDF::loadView('export.siswapdf',['siswa'=>$siswa]);
        return $pdf->download('siswa.pdf');
    }
}
