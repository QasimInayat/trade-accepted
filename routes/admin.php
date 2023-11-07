<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\VehicleTypeController;



Route::get('admin/login', [AuthController::class, 'loginForm'])->name('admin.login');
Route::post('admin/login', [AuthController::class, 'login'])->name('admin.login');
Route::post('admin/logout', function () {
    Auth::guard('admin')->logout();
    return redirect('admin/login');
})->name('admin.logout');



Route::get('admin/dashboard' , [DashboardController::class , 'dashboard'])->name('admin.dashboard');

//vehicle_type
Route::get('admin.vehicle_type/{id}/delete' , [VehicleTypeController::class , 'delete'])->name('admin.vehicle-type.delete');
Route::resource('admin/vehicle_type' , VehicleTypeController::class);
