<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Booking_api;
use App\Http\Controllers\UserLogin;
use App\Http\Controllers\UserRegistration;

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
Route::group(['middleware' => 'auth:sanctum'], function(){
    Route::get('/booking/{id?}',[Booking_api::class,'index']);

    });
Route::post('/login',[UserLogin::class,'index']);
Route::post('/register',[UserRegistration::class,'index']);
