<?php

use App\Http\Controllers\OrderController;
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

Route::get('/', [ServiceController::class,'shadfit'])->name('service.shadfit');
Route::get('/order', [OrderController::class , 'record_index']);
Route::get('/test', function(){
    return view('tmp');
});
Route::get('/admin', function(){
    return view('panel.root');
})->name("panel")->middleware("auth");
Auth::routes();
