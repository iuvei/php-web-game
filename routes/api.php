<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\LotteryController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\HomeController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::prefix('v1')->namespace('Api')->name('api.v1.')->group(function () {
    Route::get('lotteryTime',[LotteryController::class,'lotteryTime'])->name('lotteryTime');
    Route::get('lottery',[LotteryController::class,'lottery'])->name('lottery');
    Route::get('lotteryRule',[LotteryController::class,'lotteryRule'])->name('lotteryRule');
    Route::get('lotteryRecord',[LotteryController::class,'lotteryRecord'])->name('lotteryRecord');
    Route::post('lotteryBuy',[LotteryController::class,'lotteryBuy'])->name('lotteryBuy');
    Route::get('bettingRecord',[LotteryController::class,'bettingRecord'])->name('bettingRecord');

    Route::get('getUserBalance',[UserController::class,'getUserBalance'])->name('getUserBalance');
    Route::get('getConfig',[HomeController::class,'getConfig'])->name('getConfig');
});
