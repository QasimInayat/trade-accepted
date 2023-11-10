<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\VehicleTypeController;
use App\Http\Controllers\Admin\MakeController;
use App\Http\Controllers\Admin\VehicleController;
use App\Http\Controllers\Admin\TransactionController;



Route::get('admin/login', [AuthController::class, 'loginForm'])->name('admin.login');
Route::post('admin/login', [AuthController::class, 'login'])->name('admin.login');
Route::post('admin/logout', function () {
    Auth::guard('admin')->logout();
    return redirect('admin/login');
})->name('admin.logout');



Route::middleware(['auth:admin'])->name('admin.')->prefix('admin')->group(function () {

//vehicle_type
Route::get('vehicle_type/{slug}/delete' , [VehicleTypeController::class , 'delete'])->name('vehicle_type.delete');
Route::resource('vehicle_type' , VehicleTypeController::class);
    // Dashboard
    Route::get('dashboard' , [DashboardController::class , 'dashboard'])->name('dashboard');

    //Make
    Route::get('make/{slug}/delete', [MakeController::class, 'delete'])->name('make.delete');
    Route::resource('make', MakeController::class);

    //user
    Route::get('user', [DashboardController::class, 'user'])->name('user');
    //user
    Route::get('reviews', [DashboardController::class, 'reviews'])->name('reviews');
    // Transaction
    Route::get('transaction' , [TransactionController::class , 'index'])->name('transaction');
    Route::get('transaction/detail', [TransactionController::class, 'detail'])->name('transaction.detail');


    // Vehicle
    Route::post('vehicle/{id}/update' , [VehicleController::class , 'update'])->name('vehicle.update');
    Route::get('vehicle/{id}/delete' , [VehicleController::class , 'delete'])->name('vehicle.delete');
    Route::get('vehicle' , [VehicleController::class , 'index'])->name('vehicle.index');
    Route::get('vehicle/store' , [VehicleController::class , 'store'])->name('vehicle.store');
    Route::get('vehicle/{id}/edit' , [VehicleController::class , 'edit'])->name('vehicle.edit');
    Route::resource('vehicle', VehicleController::class);
    Route::get('remove_gallery/{id}', [VehicleController::class , 'remove_gallery'])->name('remove.gallery');
});


