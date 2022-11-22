<?php

use App\Http\Controllers\HalamanController;
use App\Http\Controllers\SiswaController;
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

//http://127.0.0.1:8000/==> view welcome
// Route::get('/', function () {
//     return view('welcome');
// });

// //http://127.0.0.1:8000/siswa ==> <h1> SAYA SISWA </H1>
// Route::get('/siswa', function () {
//     return '<h1> SAYA SISWA </h1>';
// });

// //http://127.0.0.1:8000/siswa/id ==> <h1> SAYA SISWA dengan id </H1>
// Route::get('/siswa/{id}', function ($id) {
//     return "<h1> SAYA SISWA dengan ID $id </h1>";
// })->where('id', '[0-9]+');

// //http://127.0.0.1:8000/siswa/id/nama ==> <h1> SAYA SISWA dengan id dan nama</H1>
// Route::get('/siswa/{id}/{nama}', function ($id, $nama) {
//     return "<h1> SAYA SISWA dengan ID $id & NAMA $nama</h1>";
// })->where(['id' => '[0-9]+', 'nama' => '[A-Za-z]+']);



Route::get("siswa",[SiswaController::class,"index"]);
Route::get("siswa/{id}",[SiswaController::class,"detail"])->where('id', '[0-9]+');

Route::get("/",[HalamanController::class,"index"]);
Route::get("/tentang",[HalamanController::class,"tentang"]);
Route::get("/kontak",[HalamanController::class,"kontak"]);
