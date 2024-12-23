<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LpthSanPhamController;
use App\Http\Controllers\LPTH_LOAI_SAN_PHAMController;


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

#admins 
Route::get('/lpth-admins',function(){
    return view('lpthAdmins.index');
}
);

Route::get('/lpth-admins/lpth-loai-san-pham',[LPTH_LOAI_SAN_PHAMController::class,'lpthList'])->name('lpthadmins');
Route::get('/lpth-admins/lpth-loai-san-pham/lpth-create',[LPTH_LOAI_SAN_PHAMController::class,'lpthCreate'])->name('lpthadmins.lpthloaisanpham.lpthcreate');

use App\Http\Controllers\SanPhamController;

Route::get('/sanpham', [LpthSanPhamController::class, 'index'])->name('sanpham.index');
Route::get('/sanpham/create', [LpthSanPhamController::class, 'create'])->name('sanpham.create');
Route::post('/sanpham', [LpthSanPhamController::class, 'store'])->name('sanpham.store');

Route::resource('lpthloaisanpham', LPTH_LOAI_SAN_PHAMController::class);
