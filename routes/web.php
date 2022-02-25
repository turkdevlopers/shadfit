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
Route::get('/plans', function () {
    return view('service.plans');
})->name('plans');
Auth::routes();

Route::prefix('admin')->middleware("auth")->group(function () {
    Route::get('/', [PanelController::class, 'index'])->name('panel');
    Route::get('/botsetting', [PanelController::class, 'botsetting'])->name('botsetting')->middleware("payed");
    Route::get('/profile', [PanelController::class, 'profile'])->name("profile");
    Route::get('/invoice', [PanelController::class, 'invoice'])->name("invoice");
    Route::get('/results', [PanelController::class, 'results'])->name("results");
    Route::get('/add', [PanelController::class, 'add'])->name("add");
    Route::post('/profile', [PanelController::class, 'profileUpdate'])->name("profileupdata");
});