<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LPTH_LOAI_SAN_PHAMController extends Controller
{
    public function lpthList(){
        $lpthLoaiSanPham = LPTH_LOAI_SAN_PHAM::all();
        return view('lpthAdmins.lpthLoaiSanPham.lpth-list',['lpthLoaiSanPham'=>$lpthLoaiSanPham]);

    }
}
