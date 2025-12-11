<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\controllers\HotelController ;
use App\Http\controllers\Api;
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::get('/hotels', [HotelController::class, 'index']);
Route::post('/register',[AuthController::class,'register']);

