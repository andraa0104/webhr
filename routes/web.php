<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('components.dashboard', ['title' => 'Dashboard']);
});
Route::get('/list', function () {
    return view('components.data-pegawai', ['title' => 'Data Pegawai']);
});
Route::get('/inputpegawai', function () {
    return view('components.input-pegawai', ['title' => 'Input Data Pegawai']);
});
