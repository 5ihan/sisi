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
    return view('pelanggan.index');

});

Route::get('/shop', function () {
    return view('pelanggan.shop');
});


Route::get('/detail', function () {
    return view('pelanggan.detail');
});

Route::get('/cart', function () {
    return view('pelanggan.cart');
});

Route::get('/checkout', function () {
    return view('pelanggan.checkout');
});

Route::get('/contact', function () {
    return view('pelanggan.contact');
});

Route::get('/login', function () {
    return view('pelanggan.login');
});

Route::get('/register', function () {
    return view('pelanggan.register');
});

Route::get('/profile', function () {
    return view('pelanggan.profile');
});

Route::get('/editprofile', function () {
    return view('pelanggan.editprofile');
});
/* BAGIAN ADMIN */
Route::get('/kategoriA', function () {
    return view('admin.kategori');
});

Route::get('/sisiadmin', function () {
    return view('admin.index');
});

Route::get('/produkA', function () {
    return view('admin.produk');
});

Route::get('/pembelianA', function () {
    return view('admin.pembelian');
});

Route::get('/pembayaranA', function () {
    return view('admin.pembayaran');
});

Route::get('/laporanA', function () {
    return view('admin.laporan');
});

Route::get('/pelangganA', function () {
    return view('admin.pelanggan');
});


