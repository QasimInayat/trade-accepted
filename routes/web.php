<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\ProfileController;

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


Route::get('/' , [FrontendController::class , 'index'])->name('index');
Route::get('detail/{id}', [FrontendController::class, 'detail'])->name('detail');
Route::get('search', [FrontendController::class, 'search'])->name('search');
Route::get('messenger', [FrontendController::class, 'messenger'])->name('messenger');
Route::get('client_profile', [FrontendController::class, 'clientProfile'])->name('client-profile');



Route::middleware(['auth'])->group(function () {
    
    Route::get('profile', [FrontendController::class, 'profile'])->name('profile');
    Route::post('user-profile/store' , [ProfileController::class , 'store'])->name('userprofile.store');
    Route::post('user-profile/{id}/update' , [ProfileController::class , 'update'])->name('userprofile.update');



    Route::get('vehicle/{id}/delete' , [VehicleController::class , 'delete'])->name('vehicle.delete');
    Route::resource('vehicle', VehicleController::class);
    Route::get('remove_gallery/{id}', [VehicleController::class , 'remove_gallery'])->name('remove.gallery');

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
