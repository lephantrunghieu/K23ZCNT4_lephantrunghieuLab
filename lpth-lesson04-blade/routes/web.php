<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/test', function () {
//return view('test');
//});

Route::get('/test', [LpthProductController::class,'lpthIndex']);

#views
Route::get('/lpth-view1',function(){
    return view('lpth-view1',['name'=>"k23cnt - Project1 - Trung Hieu"]);
});

Route::get('/lpth-view2',function(){
    return view('lpth-view2',[
        'name' => "k23cnt - Project1 - Trung Hieu",
        'array' => [0, 4, 11, 2003]
    ]);
});

Route::get('/lpth-view3',function(){
    return view('lpth-view3',[
        'name' => ["Le","Phan","Trung","Hieu"],
        'arr'  => [01, 34, 11, 203],
        'users'=> []
    ]);
});