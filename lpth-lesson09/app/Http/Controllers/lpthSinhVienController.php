<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class lpthSinhVienController extends Controller
{
            // CRUD
        public function index()
        {
        // Lấy toàn bộ dữ liệu trong bảng sinh viên
        $slpthsinhviens = lpthsinhvien::all();
        return view('sinhvien.index', ['sinhViens'=>$sinhViens]);
        }
}
