<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class LpthKhoaController extends Controller
{
    //Doc du lieu tu bang khoa 
    public function lpthGetAllKhoa()
    {
        //Truy van doc du lieu tu bang khoa 
        $lpthKhoas = DB::select("Select * from lpthkhoa");
        //Chuyen du lieu len tren view de hien thi 
        return view('lpthKhoa.lpthList',['lpthKhoas' => $lpthKhoas]);
    }

    //Chi tiet khoa
    public function lpthGetKhoa($makh)
    {
        $khoa = DB::select("Select * from lpthkhoa where lpthmakhoa=?",[$makh])[0];
        return view('lpthKhoa.lpthDetail',['khoa'=>$khoa]);
    }   

    //edit 
    public function lpthEdit($makh)
    {
        $khoa = DB::select("Select * from lpthkhoa where lpthmakhoa=?",[$makh])[0];
        return view('lpthKhoa.lpthEdit',['khoa'=>$khoa]);
    }
    //edit submit
    public function lpthEditSubmit(Request $request)
    {
        //Lay du lieu moi tren form sua
        $makh = $request->input('LPTHMAKH');
        $tenkh = $request->input('LPTHTENKH');
        DB::update("UPDATE lpthkhoa SET LPTHTENKH = ? WHERE LPTHMAKHOA=?",[$tenkh,$makh]);
        return redirect('/khoas');
    }

    
}
