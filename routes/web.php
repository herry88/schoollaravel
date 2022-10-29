<?php

use App\Http\Controllers\BelajarController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\JurusanController;
use Illuminate\Support\Facades\Route;

use App\Http\Middleware\LevelAdmin;

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
    return view('welcome');
});

//rute / jalur
Route::get('gundar', function () {
    return '<h1>Helllo Laravel</h1>';
});

Route::get('belajar',[BelajarController::class,'index']);
Route::get('product',[BelajarController::class,'product']);
// Route::get('product/{nama}',[BelajarController::class,'product']);
// Route::get('belajar',[\App\Http\Controllers\BelajarController::class,'index']);
// Route::resource('belajar', BelajarController::class);

Route::group(['prefix'=>'admin','middleware'=>'auth','admin'], function(){
//dosen
Route::resource('dosen', DosenController::class);
Route::get('dosen/destroy/{id}',[DosenController::class,'destroy'])->name('dosen.destroy');

//fakultas
Route::resource('fakultas',FakultasController::class);

//jurusan
Route::resource('jurusan', JurusanController::class);
});

Route::group(['prefix'=>'dosen','middleware'=>'auth','dosen'], function(){

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
