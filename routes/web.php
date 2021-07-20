<?php

use App\Http\Controllers\CustomerController;
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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::prefix('customer')->group(function (){
    Route::get('/',[CustomerController::class,'index'])->name('customer.list');
    Route::get('/{id}',[CustomerController::class,'showList'])->name('customer.detail');
    Route::get('/customer/create',[CustomerController::class,'create'])->name('customer.create');
    Route::post('/customer/create',[CustomerController::class,'store'])->name('customer.store');
    Route::get('customer/delete/{id}',[CustomerController::class,'destroy'])->name('customer.delete');
    Route::get('customer/update/{id}',[CustomerController::class,'edit'])->name('customer.edit');
    Route::post('customer/update/{id}',[CustomerController::class,'update'])->name('customer.update');
});
