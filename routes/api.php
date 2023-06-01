<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/student',[ApiController::class,'create']);
Route::get('/student',[ApiController::class,'show']);
Route::get('/student/{id}',[ApiController::class,'showbyid']);
Route::put('/studentupdate/{id}',[ApiController::class,'updatebyid']);
Route::delete('/studentdelete/{id}',[ApiController::class,'delete']);
