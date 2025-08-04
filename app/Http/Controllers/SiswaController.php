<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    // mengarahkan ke halaman index
    public function index() {
        return view('siswa.index');
    }


    // mengarahkan ke halaman create
    public function create() {
        return  view('siswa.create');
    }

    // fungsi store data siswa
    public function store(Request $request) {
        // lakukan validasi data
        $request->validate([
            'name'          => 'required',
            'nisn'          => 'required',
            'alamat'        => 'required',
            'email'         => 'required',
            'password'      => 'required',
            'no_handphone'  => 'required'
        ]);

        // siapkan data yang akan di masukan ke dalam tabel user
        $datasiswa_store = [
            'clas_id'      => $request->kelas_id,
            'photo'        => 'foto.jpg',
            'name'         => $request->name,
            'nisn'         => $request->nisn,
            'alamat'       => $request->alamat,
            'email'        => $request->email,
            'password'     => $request->password,
            'no_handphone' => $request->no_handphone
        ];
        
        // simpan data ke dalam tabel user
        User::create($datasiswa_store);
       
        // pindahkan user ke halaman beranda / home
        return redirect('/');    
    } 
}
