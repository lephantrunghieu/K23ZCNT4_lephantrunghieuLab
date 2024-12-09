<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LpthSessionController extends Controller
{
    //Doc du lieu tu session
    public function lpthGetSessionData(Request $request)
    {
        if($request->session()->has("K23CNT4_LePhanTrungHieu"))
        {
            echo "<h2> Session Data". $request->session()->get("K23CNT4_LePhanTrungHieu");
        }else{
            echo "<h2> Khong co du lieu trong session </h2>";
        }
    }
    //#Ghi du lieu vao session
    public function lpthStoreSessionData(Request $request)
    {
        // Luu
        $request->session()->put('K23CNT4_LePhanTrungHieu','K23CNT4- Le Phan Trung Hieu - 2310900036');
        echo "<h2> Dữ liệu đã được lưu và session </h2>";
    }

    // Xoa du lieu trong session

public function lpthDeleteSessionData(Request $request)
    {
    $request->session()->forget('K23CNT4_LePhanTrungHieu');
    echo "<h2> Dữ liệu đã được xóa khỏi session </h2>";
    }


}
