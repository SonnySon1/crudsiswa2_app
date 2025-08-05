<?php

namespace App\Http\Controllers;

use App\Models\Clas;
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

        // siapkan data kelas
        $clases = Clas::all();

        // alihkan ke halaman create siswa
        return  view('siswa.create', compact('clases'));
    }

    // fungsi store data siswa
    public function store(Request $request) {
        // lakukan validasi data
        $request->validate([
            'name'          => 'required',
            'nisn'          => 'required | unique:users,nisn',
            'alamat'        => 'required',
            'email'         => 'required | unique:users,email',
            'password'      => 'required',
            'no_handphone'  => 'required | unique:users,no_handphone'
        ]);

        // siapkan data yang akan di masukan ke dalam tabel user
        $datasiswa_store = [
            'clas_id'      => $request->kelas_id,
            'name'         => $request->name,
            'nisn'         => $request->nisn,
            'alamat'       => $request->alamat,
            'email'        => $request->email,
            'password'     => $request->password,
            'no_handphone' => $request->no_handphone
        ];

        $datasiswa_store['photo'] = $request->file('foto')->store('profilesiswa', 'public');

        // simpan data ke dalam tabel user
        User::create($datasiswa_store);
       
        // pindahkan user ke halaman beranda / home
        return redirect('/');    
    } 
}
