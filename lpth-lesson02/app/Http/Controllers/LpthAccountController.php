<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LpthAccountController extends Controller
{
    // Phương thức index
    public function index(){
        return "<h1> Welcome to lê phan trung hiếu - Controller </h1>";
    }

    // Phương thức create
    public function create() {
        return view('lpth-account-create');
    }
}
