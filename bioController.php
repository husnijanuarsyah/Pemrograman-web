<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\model1;

use Session;

class bioController extends Controller
{
    public function index(){
        $bio=model1::all();
        return view('pages.tampil',['bio'=>$bio]);
    }

    public function simpanData(Request $request) {
        $request->validate (
            [
            'nama' => 'required|max:225',
            'nis' => 'required',
            'kelas' => 'required',
            'alamat' => 'required',
            'tgllhr' => 'required',
            ],
            [
            'nama.required' => 'Nama tidak boleh kosong',
            'nis.required' => 'NIS tidak boleh kosong',
            'kelas.required' => 'Kelas tidak boleh kosong',
            'alamat.required' => 'Alamat tidak boleh kosong',
            'tgllhr.required' => 'Tanggal Lahir tidak boleh kosong',
            ]
    );
    $data=model1::create([
        'nama'=>$request->nama,
        'nis'=>$request->nis,
        'kelas'=>$request->kelas,
        'alamat'=>$request->alamat,
        'tgllhr'=>$request->tgllhr,
    ]);

    if($data){
        session::flash('sukses','Data Telah di Tambahkan!');
        return redirect('/form');
    }
    // dd($data);
    }
}
