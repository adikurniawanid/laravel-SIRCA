<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home', [
        "title" => "Beranda"
    ]);
});

Route::get('/kategori', function () {
    return view('kategori', [
        "title" => "Kategori"
    ]);
});

Route::get('/barang', function () {
    return view('barang', [
        "title" => "Barang"
    ]);
});

Route::get('/transaksi', function () {
    return view('transaksi', [
        "title" => "Transaksi"
    ]);
});
