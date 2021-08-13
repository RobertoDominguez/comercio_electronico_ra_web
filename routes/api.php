<?php

use App\Http\Controllers\Api\ApiCategorieController;
use App\Http\Controllers\Api\ApiProductController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/categories',[ApiCategorieController::class,'all']);

Route::get('/products',[ApiProductController::class,'all']);
Route::get('/product/{id}',[ApiProductController::class,'show']);