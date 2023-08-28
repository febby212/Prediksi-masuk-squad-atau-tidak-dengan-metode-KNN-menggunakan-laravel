<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\adminKnnBertahan;
use App\Http\Controllers\adminKnnGelandang;
use App\Http\Controllers\adminKnnGk;
use App\Http\Controllers\adminKnnPenyerang;
use App\Http\Controllers\dataController;
use App\Http\Controllers\editKController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\knnBertahanController;
use App\Http\Controllers\knnController;
use App\Http\Controllers\knnGelandangController;
use App\Http\Controllers\knnGkController;
use App\Http\Controllers\userController;
use App\Http\Middleware\checkrole;
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

//routing guest
Route::controller(indexController::class)->group(function () {
    Route::get('/', 'awal');
    Route::get('/tentang', 'about');
    Route::get('/pengembang', 'pengembang');
    Route::get('/petunjuk', 'penggunaan');
});


//show data
Route::get('/contohData', [dataController::class, 'dataPemain']);


// login routing
Route::get('/login', [userController::class, 'index'])->name('login');

//routing register
Route::get('/regis', [userController::class, 'regis']);
Route::post('/daftar', [userController::class, 'daftar']);

//routing to login if they not login & wanted using predict fitur
Route::group(['middleware' => 'guest'], function () {
    Route::post('/auth', [userController::class, 'login']);
});

//cek role on login
Route::group(['middleware' => ['auth', 'checkrole:1,2']], function () {
    Route::post('/logout', [userController::class, 'logout']);
    Route::get('/redirect', [userController::class, 'cek']);
});

//Routing after login admin
Route::group(['middleware' => ['auth', 'checkrole:1']], function () {

    Route::get('/dashboard', [userController::class, 'admin'])->name('adminLogin');

    //routing admin tampil data
    Route::get('/dataPemain', [adminController::class, 'data']);

    //tambah data
    Route::controller(adminController::class)->group(function () {
        Route::get('/tambahPenyerang', 'tambah');
        Route::post('/penyerang', 'tambahPenyerang');

        Route::get('/tambahGelandang', 'viewGelandang');
        Route::post('/gelandang', 'tambahGelandang');

        Route::get('/tambahBertahan', 'viewBertahan');
        Route::post('/bertahan', 'tambahBertahan');

        Route::get('/tambahGk', 'viewGk');
        Route::post('/gk', 'tambahGk');
    });

    Route::get('/prediksiPenyerang', [adminKnnPenyerang::class, 'viewFormPenyerang']);
    Route::post('/adminPrediksiPenyerang', [adminKnnPenyerang::class, 'penyerangKnnAdmin']);

    Route::get('/prediksiGelandang', [adminKnnGelandang::class, 'viewFormGelandang']);
    Route::post('/adminPrediksiGelandang', [adminKnnGelandang::class, 'gelandangKnnAdmin']);

    Route::get('/prediksiBertahan', [adminKnnBertahan::class, 'viewFormBertahan']);
    Route::post('/adminPrediksiBertahan', [adminKnnBertahan::class, 'bertahanKnnAdmin']);

    Route::get('/prediksiGk', [adminKnnGk::class, 'viewFormGk']);
    Route::post('/adminPrediksiGk', [adminKnnGk::class, 'gkKnnAdmin']);

    Route::get('/updateK', [editKController::class, 'viewK']);
    Route::put('/edit/{id}', [editKController::class, 'update']);
});
//end routing after login admin

//routing after login user
Route::group(['middleware' => ['auth', 'checkrole:2']], function () {
    Route::get('/home', [userController::class, 'user'])->name('aflog');
    // routing prediction
    Route::get('/penyerang', [knnController::class, 'formKnn']);
    Route::post('/predictPenyerang', [knnController::class, 'predict'])->name('predict.penyerang');

    Route::get('/tengah', [knnGelandangController::class, 'index']);
    Route::post('/predictTengah', [knnGelandangController::class, 'predict'])->name('predict.tengah');

    Route::get('/bertahan', [knnBertahanController::class, 'index']);
    Route::post('/predictBek', [knnBertahanController::class, 'predict'])->name('predict.bek');

    Route::get('/kiper', [knnGkController::class, 'index']);
    Route::post('/predictGk', [knnGkController::class, 'predict'])->name('predict.gk');
});
// end after login user routing



