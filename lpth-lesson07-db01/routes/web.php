<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

#Khoa
Route::get('/khoas',
        [LpthKhoaController::class,'lpthGetAllKhoa'])->name('lpthkhoa.lpthgetallkhoa');
#Khoa - detail
Route::get('/khoas/detail/{makh}',
        [LpthKhoaController::class,'lpthGetKhoa'])->name('lpthkhoa.lpthgetKhoa');
#Khoa - edit
Route::get('/khoas/edit/{makh}',
        [LpthKhoaController::class,'lpthEdit'])->name('lpthkhoa.lpthEdit');
Route::post('/khoas/edit/',
        [LpthKhoaController::class,'lpthEditSubmit'])->name('lpthkhoa.lpthEditSubmit');

#khoa - insert
Route::get('/khoas/insert',
        [LpthKhoaController::class,'lpthInsert'])->name('lpthkhoa.lpthInsert');
Route::post('/khoas/insert',
        [LpthKhoaController::class,'lpthInsertSubmit'])->name('lpthkhoa.lpthInsertSubmit');

#khoa - delete
Route::get('/khoas/delete/{makh}',
        [LpthKhoaController::class,'lpthDelete'])->name('lpthkhoa.lpthDelete');

#MonHoc

Route::get('/monhocs',
        [LpthMonHocController::class,'lpthList'])->name('lpthmonhoc.lpthlist');
