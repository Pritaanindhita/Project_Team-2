<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormInspeksiController;

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
    return view('inspeksi');
});
Route::get('/inspeksi', function () {
    return view('inspeksi');
});
Route::get('/tabel-inspeksi', function () {
    return view('table-inspeksi');
});
Route::get('/form', [FormInspeksiController::class, 'formulir']);
Route::post('/form', [FormInspeksiController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/laporan', function () {
    return view('laporan');
});
Route::get('/detail-laporan', function () {
    return view('detail_laporan');
});
