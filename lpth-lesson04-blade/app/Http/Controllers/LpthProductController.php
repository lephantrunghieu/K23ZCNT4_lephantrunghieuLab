<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LpthProductController extends Controller
{
    public function lpthIndex(){

        $fruits = array("Apple","Orange","Mango","Banana","Pineapple");
        return view('test',['fruits'=>$fruits]);
    }
}
