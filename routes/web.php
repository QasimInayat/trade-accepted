<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ChatController;

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
Route::get('client_profile', [FrontendController::class, 'clientProfile'])->name('client-profile');
Route::get('vehicle-list' , [FrontendController::class, 'vehicleList'])->name('vehicle-list');


Route::middleware(['auth'])->group(function () {

    Route::get('messenger', [FrontendController::class, 'messenger'])->name('messenger');
    Route::get('messenger/v2', [FrontendController::class, 'messengerv2'])->name('messenger.v2');

    //Thread
    Route::post('thread/store' , [FrontendController::class , 'threadStore'])->name('thread.store');

    //Chat
    Route::get('chat/{id}' , [ChatController::class , 'index'])->name('chat.index');
    Route::get('vehicle-chat/{id}' , [ChatController::class , 'vehicleChat'])->name('vehicle.chat');
    Route::post('message' , [ChatController::class , 'chatStore'])->name('chat.store');

    Route::get('profile', [ProfileController::class, 'profile'])->name('profile');
    Route::post('user-profile/{id}/update' , [ProfileController::class , 'update'])->name('userprofile.update');
    Route::post('payment-update/{id}' , [ProfileController::class , 'paymentUpdate'])->name('payment.update');

    Route::get('vehicle/{id}/delete' , [VehicleController::class , 'delete'])->name('vehicle.delete');
    Route::resource('vehicle', VehicleController::class);
    Route::get('remove_gallery/{id}', [VehicleController::class , 'remove_gallery'])->name('remove.gallery');
    Route::get('notification', [FrontendController::class, 'notification'])->name('notification');

    //Notification
    Route::post('update-notification/{id}' , [FrontendController::class , 'updateNotification']);
    Route::get('notification/count' , [FrontendController::class , 'notificationcount'])->name('load.notification.data');


    //Message
    Route::post('update-message/{id}' , [FrontendController::class , 'updatemessage']);
    Route::get('message/count' , [FrontendController::class , 'messagecount'])->name('load.message.data');

});

Auth::routes();
