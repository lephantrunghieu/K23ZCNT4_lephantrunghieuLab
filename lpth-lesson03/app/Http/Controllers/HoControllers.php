<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use IllUminate\Support\Facades\Validator;

class HoController extends Controller
{
    public $data =[];

    public function showForm(){
        $title = 'thong tin nguoi dung ';

        return view('showFrom',$this->data);
    }
    public function handleForm(Request $request){
        $rules =[
            'name'=> 'required|min:4',
            'address'=>'required|integer'
        ]
        Validator::make($rules);
    }
}
