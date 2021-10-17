<?php

use App\Models\Biodata;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\SuratController;

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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [BiodataController::class,'index']);
Route::get('/read', [BiodataController::class,'read']);
Route::get('/create', [BiodataController::class,'create']);
Route::get('/store', [BiodataController::class,'store']);
Route::get('/edit/{id}', [BiodataController::class,'edit']);
Route::get('/update/{id}', [BiodataController::class,'update']);
Route::get('/destroy/{id}', [BiodataController::class,'destroy']);

Route::get('/suratijin/{id}', [BiodataController::class,'suratijin'])->name('suratijin');
Route::get('/suratlamar/{id}', [BiodataController::class,'suratlamar'])->name('suratlamar');

