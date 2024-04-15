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

Route::get('/kategoriA', function () {
    return view('admin.kategori');
});

Route::get('/sisiadmin', function () {
    return view('admin.index');
});
