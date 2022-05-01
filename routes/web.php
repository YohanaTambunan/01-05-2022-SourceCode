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
    return view('home',[
        "title" => "Home",
    ]);
});

Route::get('/Pengumuman', function () {
    return view('pengumuman', [
        "title" => "Pengumuman",
    ]);
});

Route::get('/Laporkan_Barang_Hilang', function () {
    return view('laporkanHilang', [
        "title" => "Laporkan Barang Hilang",
    ]);
});

Route::get('/Laporkan_Barang_Temuan', function () {
    return view('laporkanTemuan', [
        "title" => "Laporkan Barang Temuan",
    ]);
});

Route::get('/Temukan', function () {
    return view('temukan', [
        "title" => "Temukan",
    ]);
});

Route::get('/Grafik', function () {
    return view('grafik',[
        "title" => "Grafik",
    ]);
});

Route::get('/Profil', function () {
    return view('profil',[
        "title" => "Profil",
    ]);
});