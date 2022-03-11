<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\ServiceController;
use App\Models\Order;
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
Route::get('/order/{id}', [OrderController::class, 'record_index'])->name('order')->middleware("activeorder");
Route::post('/order', [OrderController::class, 'store'])->name('orderstore')->middleware("activeorder");
Route::get('/plans', function () {
    return view('service.plans');
})->name('plans');
Auth::routes();

Route::prefix('admin')->middleware("auth")->group(function () {
    Route::get('/', [PanelController::class, 'index'])->name('panel');
    Route::get('/botsetting', [PanelController::class, 'botsetting'])->name('botsetting')->middleware("payed");
    Route::get('/profile', [PanelController::class, 'profile'])->name("profile");
    Route::get('/invoice', [PanelController::class, 'invoice'])->name("invoice");
    Route::get('/results', [PanelController::class, 'results'])->name("results")->middleware("payed");
    Route::get('/add', [PanelController::class, 'add'])->name("add")->middleware("payed");
    Route::post('/profile', [PanelController::class, 'profileUpdate'])->name("profileupdata");
    Route::post('/profile', [PanelController::class, 'profileUpdate'])->name("profileupdata");
    Route::get('/invoice/print/{order}', [OrderController::class, 'showprint'])->name("invoicePrint");
    Route::get('/invoice/pdf/{order}', [OrderController::class, 'showpdf'])->name("invoicePdf");
    Route::get('/invoice/delete', [PanelController::class, 'invoiceDelete'])->name("invoiceDelete");
    Route::post('/invoice/pay', [PanelController::class, 'payinvoice'])->name("payInvoice");
});

Route::post('/invoice/verifypay', [PanelController::class, 'verifypay'])->name("verifyPay");