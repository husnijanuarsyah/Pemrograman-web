<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bioController;
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

Route::get('/form', function () {
    return view('pages.form');
});
// Route::get('/tampil', function () {
// return view('pages.tampil');
// });

Route::post('/simpanData', [bioController::class, 'simpanData']);

Route::get('/tampil', [bioController::class, 'index']);
