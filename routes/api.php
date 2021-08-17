<?php

use App\Http\Controllers\Api\ApiCategorieController;
use App\Http\Controllers\Api\ApiProductController;
use App\Http\Controllers\Api\ApiSaleController;
use App\Http\Controllers\Api\ApiUserController;
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

Route::post('/login',[ApiUserController::class,'login']);
Route::post('/signup',[ApiUserController::class,'signup']);

Route::get('/categories',[ApiCategorieController::class,'all']);

Route::get('/products',[ApiProductController::class,'all']);
Route::get('/categorie/products/{categorie_id}',[ApiProductController::class,'allCategorie']);
Route::get('/product/{id}',[ApiProductController::class,'show']);

Route::post('/buy',[ApiSaleController::class,'buy']);
Route::post('/add_detail',[ApiSaleController::class,'addDetail']);