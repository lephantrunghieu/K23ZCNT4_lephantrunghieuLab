<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LPTH_LOAI_SAN_PHAM;

class LPTH_LOAI_SAN_PHAMController extends Controller
{
    public function index()
    {
        $lpthLoaiSanPhams = LPTH_LOAI_SAN_PHAM::all();
        return view('lpthloaisanpham.index', compact('lpthLoaiSanPhams'));
    }

    public function create()
    {
        return view('lpthloaisanpham.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'lpthMaLoai' => 'required|string|max:255|unique:LPTH_LOAI_SAN_PHAM',
            'lpthTenLoai' => 'required|string|max:255',
            'lpthTrangThai' => 'required|boolean',
        ]);

        LPTH_LOAI_SAN_PHAM::create($request->all());

        return redirect()->route('lpthloaisanpham.index')->with('success', 'Thêm mới loại sản phẩm thành công!');
    }

    public function edit($id)
    {
        $lpthLoaiSanPham = LPTH_LOAI_SAN_PHAM::findOrFail($id);
        return view('lpthloaisanpham.edit', compact('lpthLoaiSanPham'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'lpthMaLoai' => 'required|string|max:255|unique:LPTH_LOAI_SAN_PHAM,lpthMaLoai,' . $id,
            'lpthTenLoai' => 'required|string|max:255',
            'lpthTrangThai' => 'required|boolean',
        ]);

        $lpthLoaiSanPham = LPTH_LOAI_SAN_PHAM::findOrFail($id);
        $lpthLoaiSanPham->update($request->all());

        return redirect()->route('lpthloaisanpham.index')->with('success', 'Cập nhật loại sản phẩm thành công!');
    }

    public function destroy($id)
    {
        $lpthLoaiSanPham = LPTH_LOAI_SAN_PHAM::findOrFail($id);
        $lpthLoaiSanPham->delete();

        return redirect()->route('lpthloaisanpham.index')->with('success', 'Xóa loại sản phẩm thành công!');
    }
}
