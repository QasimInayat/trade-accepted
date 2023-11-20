<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\VehicleController;

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
    return redirect()->route('login');
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('index', [FrontendController::class, 'index'])->name('index');
Route::get('detail', [FrontendController::class, 'detail'])->name('detail');
Route::get('search', [FrontendController::class, 'search'])->name('search');
Route::get('messanger', [FrontendController::class, 'messanger'])->name('messanger');

Route::get('vehicle' , [VehicleController::class , 'index'])->name('vehicle.index');
Route::get('vehicle/create' , [VehicleController::class , 'create'])->name('vehicle.create');
Route::post('vehicle/store' , [VehicleController::class , 'store'])->name('vehicle.store');
Route::get('vehicle/{id}/edit' , [VehicleController::class , 'edit'])->name('vehicle.edit');
Route::post('vehicle/{id}/update' , [VehicleController::class , 'update'])->name('vehicle.update');
Route::get('vehicle/{id}/delete' , [VehicleController::class , 'delete'])->name('vehicle.delete');
Route::resource('vehicle', VehicleController::class);
Route::get('remove_gallery/{id}', [VehicleController::class , 'remove_gallery'])->name('remove.gallery');
