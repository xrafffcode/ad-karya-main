<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', HomeController::class . '@index');

Route::get('/about', function(){
    return view('about');
});



Route::get('/login', function(){
    return view('auth.login');
});

Route::get('/admin', AdminController::class . '@index');

Route::post('/carousel/upload', AdminController::class . '@proses_upload_carousel');
Route::get('/carousel/hapus/{id_foto}', AdminController::class . '@hapus_carousel');

Route::post('/about/upload', AdminController::class . '@proses_upload_about');
Route::get('/about_edit/{id}', AdminController::class . '@edit_about');
Route::post('/about/update', AdminController::class . '@update_about');

Route::post('/pemilik/upload', AdminController::class . '@proses_upload_pemilik');
Route::get('/pemilik/hapus/{id}', AdminController::class . '@hapus_pemilik');


Auth::routes();

