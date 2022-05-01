<?php

use App\Http\Controllers\ArController;
use App\Http\Controllers\HomeController;
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




Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/menu', [HomeController::class, 'menu'])->name('index.menu');
Route::get('/list', [HomeController::class, 'list'])->name('index.list');
Route::get('/scan_qr', [HomeController::class, 'scan_qr'])->name('index.scanqr');
Route::get('/ar/result/{id}', [ArController::class, 'result'])->name('ar.result');
Route::get('/ar/detail/{id}', [ArController::class, 'detail'])->name('ar.detail');
Route::get('/ar/show/{id}', [ArController::class, 'show'])->name('ar.show');
Route::post('/ar/insert', [ArController::class, 'insert'])->name('ar.insert');





