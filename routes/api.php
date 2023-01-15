<?php

use App\Http\Controllers\V1\IranProvinceAPiController;
use App\Http\Controllers\V1\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix'=>'v1'],function (){
    Route::get('province', [IranProvinceAPiController::class,'get']);
    Route::get('provinces', [Province::class,'show']);
});
