<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\Hocontroller;
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
// showForm nhap thong tin nguoi dung
Route::get('/them nguoi dung ', [Hocontroller::class,'showfrom']);
Route::post('/them nguoi dung',[Hocontroller::class,'']);   

