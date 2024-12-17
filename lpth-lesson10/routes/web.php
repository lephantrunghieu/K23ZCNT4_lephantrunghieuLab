<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LpthVattuController;
use App\Http\Controllers\LpthNhaccController;


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

Route::resource('lpthvattu', LpthVattuController::class);

Route::resource('lpthnhacc', LpthNhaccController::class);

