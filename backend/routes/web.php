<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\purePurchaseController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('purchases', [PurchaseController::class,'index']);
Route::post('purchases', [PurchaseController::class,'purchase']);
Route::get('purchases/success', [PurchaseController::class,'success']);
Route::post('purchases/successRedirect', [PurchaseController::class,'successRedirect']);
Route::post('purchases/success', [PurchaseController::class,'postSuccess']);
Route::get('purchases/back', [PurchaseController::class,'back']);

Route::get('purePurchases', [purePurchaseController::class,'index']);
Route::post('purePurchases', [purePurchaseController::class,'purchase']);
Route::get('purePurchases/success', [purePurchaseController::class,'success']);
Route::post('purePurchases/successRedirect', [purePurchaseController::class,'successRedirect']);
Route::post('purePurchases/success', [purePurchaseController::class,'postScucess']);
Route::get('purePurchases/back', [purePurchaseController::class,'back']);
Route::post('purePurchases/logisticsPurchase', [purePurchaseController::class,'logisticsPurchase']);
