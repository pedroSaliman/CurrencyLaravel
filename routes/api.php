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
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//
Route::get("/dollar",[ApiController::class,'get1']);
Route::get("/egy",[ApiController::class,'get2']);
Route::get("/aed",[ApiController::class,'get3']);
Route::get("/fetch",[ApiController::class,'fetchall']);
Route::get("/getusers",[ApiController::class,'getusers']);
Route::get("/postusers",[ApiController::class,'postusers']);
Route::get("/putusers",[ApiController::class,'putusers']);
Route::get("/deleteusers",[ApiController::class,'deleteusers']);
Route::get("/registeruser",[ApiController::class,'registeruser']);




