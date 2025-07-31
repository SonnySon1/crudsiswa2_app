<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('siswa.index');
});

Route::get('/siswa/create', function () {
   return  view('siswa.create');
});

