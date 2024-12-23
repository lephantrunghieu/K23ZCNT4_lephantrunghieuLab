<?php

use Illuminate\Support\Facades\Route;

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