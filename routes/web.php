<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;

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
Route::get('mesanger', [FrontendController::class, 'mesanger'])->name('mesanger');
