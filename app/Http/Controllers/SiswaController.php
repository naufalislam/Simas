<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class SiswaController extends Controller
{
    public function index()
    {
        $data_siswa = \App\Models\Siswa::all();
        return view('siswa.index',['data_siswa' => $data_siswa]);
    }
    
    public function create(Request $request)
    {
        \App\Models\Siswa::create($request->all());
        return redirect('/siswa')->with('sukses','Data Berhasil Diinput !');
    }

    public function edit($id)
    {
        $siswa = \App\Models\Siswa::find($id);
        // dd($siswa);
        return view('siswa.edit',['siswa' => $siswa]);
    }

    public function update(Request $request,$id)
    {
        $siswa = \App\Models\Siswa::find($id);
        $siswa->update($request->all());
        return redirect('siswa')->with('sukses','Data Berhasil Diupdate !');
    }

    public function delete($id)
    {
        $siswa = \App\Models\Siswa::find($id);
        $siswa->delete($siswa);
        return redirect('siswa')->with('sukses','Data Berhasil Dihapus !');
    }
}
