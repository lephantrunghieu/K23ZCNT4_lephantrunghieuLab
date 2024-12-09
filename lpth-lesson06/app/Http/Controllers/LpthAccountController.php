<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LpthAccountController extends Controller
{
    //#form login - get
    public function lpthLogin(){
        return view('lpth-login');
    }

    /*
        Kiem tra email, mat khau khong de trong
        Neu email =lpth@gmail.com va pass=Trunghieu123@ thi luu thong tin vao session
         voi ten nhu vi du truoc 
    */
    public function lpthLoginSubmit(Request $request)
    {
        //validation
        $validation = $request->validate([
            'lpthEmail'=> 'required|email',
            'lpthPass' =>  'required|min:6'
        ]);
        //Check login -> store session -> redirect home
        $lpthEmail = $request->input('lpthEmail');
        $lpthPass = $request->input('lpthPass');

        $lpthLoginSession = [
            'lpthEmail'=>$lpthEmail,
            'lpthPass' =>$lpthPass
        ];
        $lpth_json = json_encode($lpthLoginSession);

        if($lpthEmail== 'lpth@gmail.com' && $lpthPass=="Trunghieu123@")
        {
            //Luu session
            $request->session()->put('K23CNT4-LePhanTrungHieu',$lpthEmail);
            return redirect('/');
        }

        return redirect()->back()->with('lpth-error', 'Loi dang nhap');
    }

        public function lpthlogout (Request $request)
        {
        $request->session()->forget('K23CNT4-LePhanTrungHieu');
        return redirect('/');
        }
}