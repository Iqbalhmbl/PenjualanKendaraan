<?php

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'welcome'], function () {
    return view('welcome');
})->name('welcome');

Route::get('/details/{id}', [App\Http\Controllers\HomeController::class, 'detail'])->name('detail');
Route::get('/pemesanan/{id}', [App\Http\Controllers\HomeController::class, 'pemesanan'])->name('pemesanan');
Route::post('/pemesanan/store', [App\Http\Controllers\PemesananController::class, 'store'])->name('store.pemesanan');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['role:admin']], function (){
Route::get('/admin/kendaraan', [App\Http\Controllers\KendaraanController::class, 'index'])->name('index.kendaraan');
Route::get('/admin/kendaraan/option', [App\Http\Controllers\KendaraanController::class, 'option'])->name('option.kendaraan');
Route::get('/admin/kendaraan/create', [App\Http\Controllers\KendaraanController::class, 'create'])->name('create.kendaraan');
Route::get('/admin/kendaraan/create/motor', [App\Http\Controllers\KendaraanController::class, 'createMotor'])->name('createMotor.kendaraan');
Route::post('/admin/kendaraan/store', [App\Http\Controllers\KendaraanController::class, 'store'])->name('store.kendaraan');
Route::get('/admin/kendaraan/edit/{id}', [App\Http\Controllers\KendaraanController::class, 'edit'])->name('edit.kendaraan');
Route::get('/admin/kendaraan/editMotor/{id}', [App\Http\Controllers\KendaraanController::class, 'editMotor'])->name('editMotor.kendaraan');
Route::post('/admin/kendaraan/update/{id}', [App\Http\Controllers\KendaraanController::class, 'update'])->name('update.kendaraan');
Route::post('/admin/kendaraan/updateMotor/{id}', [App\Http\Controllers\KendaraanController::class, 'updateMotor'])->name('updateMotor.kendaraan');
Route::get('/admin/kendaraan/delete/{id}', [App\Http\Controllers\KendaraanController::class, 'delete'])->name('delete.kendaraan');

Route::get('/laporan', [App\Http\Controllers\PemesananController::class, 'index'])->name('index.laporan');
Route::get('/laporan/pdf/{id}', [App\Http\Controllers\PemesananController::class, 'pdf'])->name('pdf.laporan');

});