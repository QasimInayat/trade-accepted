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


Route::group(['middleware' => ['auth','isUser']], function() {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});


Route::get('/' , [FrontendController::class , 'index'])->name('index');
Route::get('detail/{id}', [FrontendController::class, 'detail'])->name('detail');
Route::get('search', [FrontendController::class, 'search'])->name('search');
Route::get('messenger', [FrontendController::class, 'messenger'])->name('messenger');
Route::get('client_profile', [FrontendController::class, 'clientProfile'])->name('client-profile');



Route::middleware(['auth'])->group(function () {

    Route::get('profile', [ProfileController::class, 'profile'])->name('profile');
    Route::post('user-profile/{id}/update' , [ProfileController::class , 'update'])->name('userprofile.update');
    Route::post('payment-update/{id}' , [ProfileController::class , 'paymentUpdate'])->name('payment.update');

    Route::get('vehicle/{id}/delete' , [VehicleController::class , 'delete'])->name('vehicle.delete');
    Route::resource('vehicle', VehicleController::class);
    Route::get('remove_gallery/{id}', [VehicleController::class , 'remove_gallery'])->name('remove.gallery');
    Route::get('notification', [FrontendController::class, 'notification'])->name('notification');

    //Notification
    Route::put('update-notification/{id}' , [FrontendController::class , 'updateNotification']);
});

Auth::routes();
