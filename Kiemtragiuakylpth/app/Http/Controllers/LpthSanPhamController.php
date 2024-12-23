<?php

namespace App\Http\Controllers;
use App\Models\SanPham;
use Illuminate\Http\Request;

class LpthSanPhamController extends Controller
{
    //hien thi danh sach san pham

public function index()
{
    $sanPhams = SanPham::all(); // Lấy toàn bộ dữ liệu
    return view('sanpham.index', compact('sanPhams'));
}
  // Thêm mới loại sản phẩm
  public function create()
{
    return view('sanpham.create'); // Trả về form thêm mới
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
  



