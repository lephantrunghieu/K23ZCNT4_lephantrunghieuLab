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

Route::get('/greeting', function () {
    return "<h1>Hello wolrd, I'm Lê Phan Trung Hiếu</h1>";
});

#redirect
Route::redirect('/here','three');

Route::get('/three', function () {
  return "<h1>redirect to three </h1>";
});

#Router return view
Route::get('/trung-hieu',function(){
    return view('lpth');
});

#Route parameter
Route:: get('/devmaster/{ID}',function($ID){
    return "<h1> Devmaster ".$ID . "</h1>";
});

#Optional paramater
Route:: get('/dev/{name?}',function($name="Trung Hieu"){
    return "<h1> Xin Chào ".$name . "</h1>";
});

Route::get('/lpth-account',[LpthAccountController::class,'index'])->name('lpthAccount.index');

