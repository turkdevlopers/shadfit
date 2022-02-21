<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ServiceController::class, 'shadfit'])->name('service.shadfit');
Route::get('/order', [OrderController::class, 'record_index']);
Route::get('/test', function () {
    return view('tmp');
});
Auth::routes();

Route::prefix('admin')->middleware("auth")->group(function () {
    Route::get('/', [PanelController::class, 'index'])->name('panel');
    Route::get('/botsetting', function () {return view('panel.botsetting');})->name('botsetting');
    Route::get('/profile', [PanelController::class, 'profile'])->name("profile");
});