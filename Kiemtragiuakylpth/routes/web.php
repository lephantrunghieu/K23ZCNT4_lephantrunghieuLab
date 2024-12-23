<?php

use App\Http\Controllers\LpthSanPhamController;
use App\Http\Controllers\LPTH_LOAI_SAN_PHAMController;
use App\Http\Controllers\LPTHQuanTriController;
use App\Http\Controllers\UserController; // Bổ sung controller cho người dùng

Route::get('/', function () {
    return view('welcome');
});

// Trang quản trị
Route::prefix('lpth-quan-tri')->name('lpth_quan_tri.')->group(function () {
    // Trang tổng quan
    Route::get('/trang-tong-quan', [LPTHQuanTriController::class, 'lpthTrangTongQuan'])->name('trang_tong_quan');

    // Quản lý loại sản phẩm
    Route::get('/loai-san-pham', [LPTHQuanTriController::class, 'lpthDanhSachLoaiSanPham'])->name('loai_san_pham');

    // Quản lý người dùng
    Route::get('/nguoi-dung', [UserController::class, 'index'])->name('nguoi_dung');
});

// Loại sản phẩm
Route::resource('lpthloaisanpham', LPTH_LOAI_SAN_PHAMController::class);

// Sản phẩm
Route::prefix('sanpham')->name('sanpham.')->group(function () {
    Route::get('/', [LpthSanPhamController::class, 'index'])->name('index');
    Route::get('/create', [LpthSanPhamController::class, 'create'])->name('create');
    Route::post('/', [LpthSanPhamController::class, 'store'])->name('store');
});
