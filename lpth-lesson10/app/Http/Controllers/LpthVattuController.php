<?php

namespace App\Http\Controllers;

use App\Models\LpthVattu;
use Illuminate\Http\Request;

class LpthVattuController extends Controller
{
    public function index()
    {
        $vattus = LpthVattu::all();
        return view('lpthvattu.index', compact('vattus'));
    }

    public function create()
    {
        return view('lpthvattu.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'lpthMaVTu' => 'required|unique:lpthvattu,lpthMaVTu|max:255',
            'lpthTenVTu' => 'required|unique:lpthvattu,lpthTenVTu',
            'lpthDvTinh' => 'required',
            'lpthPhanTram' => 'required|numeric|min:0|max:100',
        ]);

        LpthVattu::create($validated);
        return redirect()->route('lpthvattu.index')->with('success', 'Vật tư được thêm thành công!');
    }

    public function edit($id)
    {
        $vattu = LpthVattu::findOrFail($id);
        return view('lpthvattu.edit', compact('vattu'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'lpthTenVTu' => 'required|unique:lpthvattu,lpthTenVTu,' . $id . ',lpthMaVTu',
            'lpthDvTinh' => 'required',
            'lpthPhanTram' => 'required|numeric|min:0|max:100',
        ]);

        $vattu = LpthVattu::findOrFail($id);
        $vattu->update($validated);

        return redirect()->route('lpthvattu.index')->with('success', 'Vật tư được cập nhật!');
    }

    public function destroy($id)
    {
        LpthVattu::destroy($id);
        return redirect()->route('lpthvattu.index')->with('success', 'Vật tư đã bị xóa!');
    }
}
