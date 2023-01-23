<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
}); 

Route::group(['middleware' => 'auth'], function(){

    Route::prefix('/form')->group(function () {
        Route::get('/',[FormController::class, 'index'])->name('form');
        Route::get('/create',[FormController::class, 'create'])->name('form.create');
        Route::post('/store',[FormController::class, 'store'])->name('form.store');
    });

    Route::get('barang',[BarangController::class, 'index'])->name('barang');
    Route::get('detail/{id}',[BarangController::class, 'detail'])->name('detail');

});



Route::get('/register',[AuthController::class, 'register']);
Route::post('/register',[AuthController::class, 'register_action']);
Route::get('/login',[AuthController::class, 'login'])->name('login');
Route::post('/login',[AuthController::class, 'login_action'])->name('login');
Route::get('/logout',[AuthController::class, 'logout'])->name('logout');
