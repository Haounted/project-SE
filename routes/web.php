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
    return view('layouts.master');
});

Route::get('/transaksi', function () {
    return view('transaksi');
});
Route::get('/cart', function () {
    return view('transaksi_cart');
});
Route::get('/save', function () {
    return view('transaksi_save');
});
Route::get('/menu', function () {
    return view('menu');
});
Route::get('/addmenu', function () {
    return view('addmenu');
});
Route::get('/editmenu', function () {
    return view('editmenu');
});
Route::get('/addkategori', function () {
    return view('addkategori');
});
Route::get('/restock', function () {
    return view('restock');
});
Route::get('/laporan', function () {
    return view('laporan');
});
Route::get('/riwayat', function () {
    return view('riwayat');
});
Route::get('/stok', function () {
    return view('h_stok');
});
Route::get('/penjualan', function () {
    return view('h_penjualan');
});
Route::get('/catatan', function () {
    return view('catatan');
});


