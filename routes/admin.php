<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MakeController;



Route::get('admin/login', [AuthController::class, 'loginForm'])->name('admin.login');
Route::post('admin/login', [AuthController::class, 'login'])->name('admin.login');
Route::post('admin/logout', function () {
    Auth::guard('admin')->logout();
    return redirect('admin/login');
})->name('admin.logout');



Route::middleware(['auth:admin'])->name('admin.')->prefix('admin')->group(function () {

    // Dashboard
    Route::get('dashboard' , [DashboardController::class , 'dashboard'])->name('dashboard');

    //Make
    Route::get('make/{slug}/delete', [MakeController::class, 'delete'])->name('make.delete');
    Route::resource('make', MakeController::class);


});
