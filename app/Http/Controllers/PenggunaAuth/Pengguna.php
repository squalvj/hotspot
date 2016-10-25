<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Pengguna extends Controller
{
    public function __construct()
    {
        $this->middleware('pengguna.guest', ['except' => 'logout']);
    }

    public function konfirmasi(){
        
        $siswa = new Siswa;
        $siswa->nama = $request->nama;
        $siswa->alamat = $request->alamat;
        $siswa->handphone = $request->handphone;
        $siswa->gender = $request->gender;
        $siswa->interest = $interest;
        $siswa->save();
    }
}
