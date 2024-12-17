<?php

namespace App\Http\Controllers;

use App\Models\LpthNhacc;
use Illuminate\Http\Request;

class LpthNhaccController extends Controller
{
    // Hiển thị danh sách nhà cung cấp
    public function index()
    {
        $nhaccs = LpthNhacc::all();
        return view('lpthnhacc.index', compact('nhaccs'));
    }

    // Hiển thị form thêm mới nhà cung cấp
    public function create()
    {
        return view('lpthnhacc.create');
    }

    // Lưu dữ liệu nhà cung cấp mới
    public function store(Request $request)
    {
        $validated = $request->validate([
            'lpthMaNCC' => 'required|unique:lpthnhacc|max:255',
            'lpthTenNCC' => 'required|max:100',
            'lpthDiachi' => 'required|max:200',
            'lpthDienthoai' => 'required|regex:/^[0-9]+$/|min:10|max:20',
        ]);

        LpthNhacc::create($validated);
        return redirect()->route('lpthnhacc.index')->with('success', 'Nhà cung cấp được thêm thành công!');
    }

    // Hiển thị form chỉnh sửa nhà cung cấp
    public function edit($id)
    {
        $nhacc = LpthNhacc::findOrFail($id);
        return view('lpthnhacc.edit', compact('nhacc'));
    }

    // Cập nhật thông tin nhà cung cấp
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'lpthTenNCC' => 'required|max:100',
            'lpthDiachi' => 'required|max:200',
            'lpthDienthoai' => 'required|regex:/^[0-9]+$/|min:10|max:20',
        ]);

        $nhacc = LpthNhacc::findOrFail($id);
        $nhacc->update($validated);

        return redirect()->route('lpthnhacc.index')->with('success', 'Thông tin nhà cung cấp đã được cập nhật!');
    }

    // Xóa nhà cung cấp
    public function destroy($id)
    {
        LpthNhacc::destroy($id);
        return redirect()->route('lpthnhacc.index')->with('success', 'Nhà cung cấp đã bị xóa!');
    }
}
