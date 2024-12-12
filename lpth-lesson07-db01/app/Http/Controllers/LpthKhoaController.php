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
        //#insert -Get
        public function lpthInsert()
        {
            return view('lpthKhoa.lpthInsert');

        }
    
        //Insert - post
        public function lpthInsertSubmit(Request $request)
        {
            //Kiem tra du lieu nhap
            $validate = $request->validate([
                'LPTHMAKH' => 'required|max:2',
                'LPTHTENKH'=>  'required|max:50'
            ],
            [
                'LPTHMAKH.required' => 'Vui long nhap ma khoa.',
                'LPTHMAKH.max' => 'Ma khoa toi da 2 ky tu.',
                'LPTHTENKH.required' => 'Vui long nhap ten khoa.',
                'LPTHTENKH.max' => 'Ten khoa toi da 50 ky tu.',
            ]);
            // Lay du lieu form
            $makh = $request->input('LPTHMAKH');
            $tenkh = $request->input('LPTHTENKH');

            //Ghi du lieu xuong database
            DB::insert("INSERT INTO lpthkhoa(LPTHMAKHOA,LPTHTENKH) VALUES (?,?)  ",[$makh, $tenkh]);
            //Chuyen sang trang danh sach 
            return redirect('/khoas');
        }
        //delete
        public function lpthDelete($makh)
            {
                DB::delete("DELETE FROM lpthkhoa WHERE LPTHMAKHOA=?",[$makh]);
        // chuyen sang trang danh sach
                return redirect('/khoas');
            }
                
}
