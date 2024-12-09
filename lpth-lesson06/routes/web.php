<?php
 use App\Http\Controllers\LpthAccountController;

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

#Test session
Route::get('/lpth-session/get',[LpthSessionController::class,'lpthGetSessionData'])->name('lpthsession.get');
Route::get('/lpth-session/set',[LpthSessionController::class,'lpthStoreSessionData'])->name('lpthsession.set');
Route::get('/lpth-session/del',[LpthSessionController::class,'lpthDeleteSessionData'])->name('lpthsession.del');

#Account
Route::get('/lpth-login',[LpthAccountController::class,'lpthLogin'])->name('lpthaccount.lpthlogin');
Route::post('/lpth-login',[LpthAccountController::class,'lpthLoginSubmit'])
    ->name('lpthaccount.lpthloginsubmit');
Route::get('/lpth-logout',[LpthAccountController::class,'lpthlogout'])
    ->name('lpthaccount.lpthlogout');