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

 //Make
Route::get('admin/make/{slug}/delete', [MakeController::class, 'delete'])->name('admin.make.delete');
Route::resource('admin/make', MakeController::class);
