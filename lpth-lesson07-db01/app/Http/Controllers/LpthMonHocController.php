<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LpthMonHocController extends Controller
{
    // #1 list mon hoc 
    public function lpthList()
    {
        $lpthMonHocs = DB::table('lpthmonhoc')->get();
        return view('lpthMonHoc.lpthList',['lpthMonHocs'=>$lpthMonHocs]);

    }
}
