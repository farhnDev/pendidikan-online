<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KursusController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\PengajarController;

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
    return view('/home');
});
//route pendaftaraan 
route::get('/pendaftaraan', [KursusController::class, 'showPendaftaraan']);
// route::get('/kursus-view/{id}', [KursusController::class, 'show']);
//route kursus
route::get('/kursus', [KursusController::class, 'index']);
route::get('/kursus-view/{id}', [KursusController::class, 'show']);
route::get('/kursus-add', [KursusController::class, 'create']);
route::post('/kursus', [KursusController::class, 'store']);

//route materi and show
route::get('/materi', [MateriController::class, 'index']);
//route create and store
route::get('/add-materi', [MateriController::class, 'create']);
route::post('/materi', [MateriController::class, 'store']);
// route::get('/materi/{id}', [MateriController::class, 'show']);

//route pengajar 
route::get('/pengajar', [PengajarController::class, 'index']);
