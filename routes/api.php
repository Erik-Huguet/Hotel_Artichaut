<?php

use App\Http\Controllers\API\DiscountController;
use App\Http\Controllers\API\NewsController;
use App\Http\Controllers\API\PictureController;
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

/*Route::apiResource('discounts', DiscountController::class);
Route::apiResource('news', NewsController::class);*/

Route::get('discounts', [DiscountController::class, 'index']);
Route::get('news', [NewsController::class, 'index']);
Route::get('pictures', [PictureController::class, 'index']);
