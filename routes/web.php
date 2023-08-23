<?php

use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\OpsiController;
use App\Http\Controllers\admin\PertanyaanController;
use App\Http\Controllers\IndexController;
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

//index 
Route::get('/', [IndexController::class, 'index'])->name('index');
Route::post('/post', [IndexController::class, 'postUsername'])->name('postUsername');
// midleware before index 
Route::group(['middleware' => ['usernameCek']], function () {
    // pertanyaan
    Route::get('/optionMulai', [IndexController::class, 'optionMulai'])->name('optionMulai');
    Route::get('/level', [IndexController::class, 'level'])->name('level');
    Route::get('/level1', [IndexController::class, 'level1'])->name('level1');
    Route::get('/level2', [IndexController::class, 'level2'])->name('level2');
    Route::get('/level3', [IndexController::class, 'level3'])->name('level3');
    Route::get('/back', [IndexController::class, 'back'])->name('back');
    Route::get('/exit', [IndexController::class, 'exit'])->name('exit');
    Route::get('/score', [IndexController::class, 'score'])->name('score');
    
});


Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('authLogin');
//route admin

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::prefix('pertanyaan')->group(function () {
        Route::get('/', [PertanyaanController::class, 'index'])->name('pertanyaan');

        // Route::get('/create', [PertanyaanController::class, 'create'])->name('pertanyaan.create');
        Route::post('/store', [PertanyaanController::class, 'store'])->name('pertanyaan.store');
        Route::get('/{id}/edit', [PertanyaanController::class, 'edit'])->name('pertanyaan.edit');
        // Route::post('/update/{id}', [PertanyaanController::class, 'update'])->name('pertanyaan.update');
        Route::delete('/store/{id}', [PertanyaanController::class, 'destroy'])->name('pertanyaan.delete');
    });

    Route::prefix('opsi')->group(function () {
        Route::get('/', [OpsiController::class, 'index'])->name('opsi');
        Route::get('/{id}', [OpsiController::class, 'getImage'])->name('getImage');

        // Route::get('/create', [OpsiController::class, 'create'])->name('opsi.create');
        Route::post('/store', [OpsiController::class, 'store'])->name('opsi.store');
        Route::get('/{id}/edit', [OpsiController::class, 'edit'])->name('opsi.edit');
        // Route::post('/update/{id}', [OpsiController::class, 'update'])->name('opsi.update');
        Route::delete('/store/{id}', [OpsiController::class, 'destroy'])->name('opsi.delete');
    });


    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
