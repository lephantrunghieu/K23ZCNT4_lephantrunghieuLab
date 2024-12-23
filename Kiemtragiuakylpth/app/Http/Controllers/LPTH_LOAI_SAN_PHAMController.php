<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LPTH_LOAI_SAN_PHAM;

class LPTH_LOAI_SAN_PHAMController extends Controller
{
    /**
     * Hiển thị danh sách loại sản phẩm.
     */
    public function index()
    {
        $lpthLoaiSanPhams = LPTH_LOAI_SAN_PHAM::all();
        return view('LPTHloaisanpham.index', compact('lpthLoaiSanPhams'));
    }

    /**
     * Hiển thị form thêm mới loại sản phẩm.
     */
    public function create()
    {
        return view('LPTHloaisanpham.create');
    }

    /**
     * Lưu loại sản phẩm mới vào cơ sở dữ liệu.
     */
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

    /**
     * Hiển thị form chỉnh sửa loại sản phẩm.
     */
    public function edit($id)
    {
        $lpthLoaiSanPham = LPTH_LOAI_SAN_PHAM::findOrFail($id);
        return view('LPTHloaisanpham.edit', compact('lpthLoaiSanPham'));
    }

    /**
     * Cập nhật thông tin loại sản phẩm trong cơ sở dữ liệu.
     */
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

    /**
     * Xóa loại sản phẩm khỏi cơ sở dữ liệu.
     */
    public function destroy($id)
    {
        $lpthLoaiSanPham = LPTH_LOAI_SAN_PHAM::findOrFail($id);
        $lpthLoaiSanPham->delete();

        return redirect()->route('lpthloaisanpham.index')->with('success', 'Xóa loại sản phẩm thành công!');
    }
}
