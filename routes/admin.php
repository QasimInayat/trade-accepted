<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;



Route::get('admin/login', [AuthController::class, 'loginForm'])->name('admin.login');
Route::post('admin/login', [AuthController::class, 'login'])->name('admin.login');
Route::post('admin/logout', function () {
    Auth::guard('admin')->logout();
    return redirect('admin/login');
})->name('admin.logout');



Route::get('admin/dashboard' , [DashboardController::class , 'dashboard'])->name('admin.dashboard');

//vehcile_type
Route::get('admin.vehcile_type/{id}/delete' , [VehcileTypeController::class , 'delete'])->name('vehciletype.delete');
Route::resource('admin/vehcile_type' , VehcileTypeController::class);
