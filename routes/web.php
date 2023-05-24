<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\petaniController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\SessionController;
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
Route::middleware(['guest'])->group(function(){
    Route::get('/', [SessionController::class, 'index'])->name('login');
    Route::post('/',[SessionController::class, 'login']);
    Route::get('/register',[registerController::class, 'index'])->name('register');
    Route::post('/register',[registerController::class, 'store']);
});

Route::get('/home', function(){
    return redirect('/home');
});

Route::middleware(['auth'])->group(function(){
    Route::get('/home',[homeController::class, 'index']);
    Route::get('/home/petani',[homeController::class, 'petani'])->middleware('userAccess:petani');
    Route::get('/home/petani/home',[petaniController::class, 'index'])->middleware('userAccess:petani')->name('petani.home');
    
    Route::get('/home/petani/penyakit',[petaniController::class, 'get_data_penyakit'])->middleware('userAccess:petani')->name('petani.penyakit');
    Route::get('/home/petani/penyakit/{id}',[petaniController::class, 'show_data_penyakit'])->middleware('userAccess:petani')->name('petani.penyakitDetail');
    
    Route::get('/home/petani/formulasi',[petaniController::class, 'get_data_formulasi'])->middleware('userAccess:petani')->name('petani.formulasi');
    Route::get('/home/petani/formulasi/{id}',[petaniController::class, 'show_data_formulasi'])->middleware('userAccess:petani')->name('petani.formulasiDetail');
    
    Route::get('/home/petani/budidaya',[petaniController::class, 'budidaya'])->middleware('userAccess:petani')->name('petani.budidaya');
    Route::get('/home/petani/kalkulasi',[petaniController::class, 'kalkulator'])->middleware('userAccess:petani')->name('petani.kalkulasi');
    Route::post('/home/petani/kalkulasi',[petaniController::class, 'kalkulator'])->middleware('userAccess:petani')->name('petani.kalkulasi');
    Route::post('/home/petani/kalkulasi/hitung',[petaniController::class, 'hitung'])->middleware('userAccess:petani')->name('petani.kalkulasi.hitung');
    Route::get('/home/petani/cuaca',[petaniController::class, 'cuaca'])->name('petani.cuaca');
    Route::get('/home/pengelola',[homeController::class, 'pengelola'])->middleware('userAccess:pengelola');
    Route::get('/home/pengguna',[homeController::class, 'pengguna'])->middleware('userAccess:pengguna');
    Route::get('/home/logout',[SessionController::class, 'logout']);
    Route::get('/logout',[SessionController::class, 'logout']);
});