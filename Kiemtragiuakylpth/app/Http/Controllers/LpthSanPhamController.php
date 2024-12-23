<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SanPham;
use App\Models\LPTH_LOAI_SAN_PHAM;

class LpthSanPhamController extends Controller
{
    public function index()
    {
        $sanPhams = SanPham::with('lpthLoaiSanPham')->get();
        return view('sanpham.index', compact('sanPhams'));
    }

    public function create()
    {
        $loaiSanPhams = LPTH_LOAI_SAN_PHAM::all();
        return view('sanpham.create', compact('loaiSanPhams'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'lpthTenSanPham' => 'required|string|max:255',
            'lpthMaSanPham' => 'required|string|max:255|unique:LPTH_SAN_PHAM',
            'lpthHinhAnh' => 'required|string|max:255',
            'lpthSoLuong' => 'required|integer|min:0',
            'lpthDonGia' => 'required|numeric|min:0',
            'lpthMaLoai' => 'required|exists:LPTH_LOAI_SAN_PHAM,id',
            'lpthTrangThai' => 'required|boolean',
        ]);

        SanPham::create($request->all());

        return redirect()->route('sanpham.index')->with('success', 'Thêm sản phẩm thành công!');
    }
}
