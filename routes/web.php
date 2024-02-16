<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\FavouriteController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ExchangeController;

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
Route::get('{full_name}/vehicle' , [FrontendController::class , 'userVehicle'])->name('user.vehicle');

Route::middleware(['auth'])->group(function () {

    Route::get('messenger', [FrontendController::class, 'messenger'])->name('messenger')->middleware('auth');

    //Thread
    Route::post('thread/store' , [FrontendController::class , 'threadStore'])->name('thread.store');

    //Chat
    Route::get('chat/{id}' , [ChatController::class , 'index'])->name('chat.index');
    Route::get('thread_vehicle' , [ChatController::class , 'vehicle'])->name('chat.vehicle');
    Route::get('thread_messages' , [ChatController::class , 'threadMessages'])->name('chat.messages');
    Route::get('send-custom-message' , [ChatController::class , 'sendCustomMessage'])->name('chat.customMessage');
    Route::get('send-deposit' , [ChatController::class , 'sendDeposit'])->name('chat.sendDeposit');
    Route::post('send-message' , [ChatController::class , 'sendMessage'])->name('chat.sendMessage');


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

    //Favourite
    Route::get('favourite' , [FavouriteController::class , 'index'])->name('favourite.index');
    Route::post('favourite/store' , [FavouriteController::class , 'store'])->name('favourite.store');

        // booking
        Route::get('booking' , [FrontendController::class , 'booking'])->name('booking');
        Route::get('booking/detail/{id}', [FrontendController::class, 'bdetail'])->name('booking.detail');
        // deposite
        Route::get('deposite' , [FrontendController::class , 'deposite'])->name('deposite');
        Route::get('deposite/detail/{id}', [FrontendController::class, 'ddetail'])->name('deposite.detail');

        Route::get('deposit' , [PaymentController::class , 'index'])->name('deposit');

        Route::post('payment-detail', [PaymentController::class, 'paymentDetails'])->name('paymentDetails');
        Route::get('thank-you' , [FrontendController::class , 'thankYou'])->name('thankYou');

        Route::post('review/store' , [FrontendController::class , 'reviewStore'])->name('review.store');

    // Exchage
    Route::get('exchange', [ExchangeController::class, 'exchange'])->name('exchange');
    Route::get('exchange-vehicle/{id}' , [ExchangeController::class, 'exchangeVehicle'])->name('exchange-vehicle');
    Route::post('exchange' , [ExchangeController::class , 'store'])->name('exchange.store');

});

Auth::routes();
