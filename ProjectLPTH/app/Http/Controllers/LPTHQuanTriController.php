<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LPTH_Loai_San_Pham; // Model loại sản phẩm
use App\Models\User; // Model người dùng

class LPTHQuanTriController extends Controller
{
    /**
     * Hiển thị trang tổng quan quản trị.
     */
    public function lpthTrangTongQuan()
    {
        $lpthTongSoLoaiSanPham = LPTH_Loai_San_Pham::count();
        $lpthTongSoNguoiDung = User::count();

        return view('lpth_quan_tri.lpth_trang_tong_quan', compact('lpthTongSoLoaiSanPham', 'lpthTongSoNguoiDung'));
    }

    /**
     * Quản lý loại sản phẩm.
     */
    public function lpthQuanLyLoaiSanPham()
    {
        $lpthLoaiSanPhams = LPTHLoaiSanPham::all();
        return view('lpth_quan_tri.lpth_loai_san_pham.lpth_danh_sach', compact('lpthLoaiSanPhams'));
    }

    /**
     * Quản lý người dùng.
     */
    public function lpthQuanLyNguoiDung()
    {
        $lpthNguoiDungs = User::all();
        return view('lpth_quan_tri.lpth_nguoi_dung.lpth_danh_sach', compact('lpthNguoiDungs'));
    }

    public function lpthDanhSachLoaiSanPham()
    {
        $lpthLoaiSanPhams = LPTH_LOAI_SAN_PHAM::all(); // Lấy danh sách loại sản phẩm
        return view('lpthloaisanpham.index', compact('lpthLoaiSanPhams'));
    }
}
