<?php


use App\Http\Controllers\API\ChamberController;
use App\Http\Controllers\API\CommentController;
use App\Http\Controllers\API\DiscountController;
use App\Http\Controllers\API\NewsController;
use App\Http\Controllers\API\PictureController;
use App\Http\Controllers\API\RoleController;
use App\Http\Controllers\API\TypeChamberController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\VideoController;

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


//Route::apiResource('chambers', ChamberController::class);

Route::group(['prefix' => 'v1'], function() {
    Route::apiResource('chambers', ChamberController::class);
});

//Route::apiResource('discounts', DiscountController::class);

Route::group(['prefix' => 'v1'], function() {
    Route::apiResource('discounts', DiscountController::class);
});


//Route::apiResource('comments',CommentController::class);
Route::group(['prefix' => 'v1'],function() {
    Route::apiResource('comments', CommentController::class);
});


//Route::apiResource('users',UserController::class);
Route::group(['prefix' => 'v1'], function() {
    Route::apiResource('users', UserController::class);
});

//Route::apiResource('videos',VideoController::class);
Route::group(['prefix'=> 'v1'], function() {
    Route::apiResource('videos', VideoController::class);
});


