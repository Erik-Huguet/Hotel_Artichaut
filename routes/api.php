<?php

use App\Http\Controllers\API\AdvantageController;
use App\Http\Controllers\API\ChamberController;
use App\Http\Controllers\API\CommentController;
use App\Http\Controllers\API\DiscountController;
use App\Http\Controllers\API\NewsController;
use App\Http\Controllers\API\PictureController;
use App\Http\Controllers\API\RoleController;
use App\Http\Controllers\API\TypeChamberController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\VideoController;
use App\Http\Controllers\AuthController;
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

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {

    return $request->user();
});


//Route::apiResource('comments',CommentController::class);
Route::group(['prefix' => 'v1'], function() {
    Route::apiResource('advantages', AdvantageController::class);
    Route::apiResource('chambers', ChamberController::class);
    Route::apiResource('comments', CommentController::class);
    Route::apiResource('discounts', DiscountController::class);
    Route::apiResource('news', NewsController::class);
    Route::apiResource('pictures', PictureController::class);
    Route::apiResource('roles', RoleController::class);
    Route::apiResource('type_chambers', TypeChamberController::class);
    Route::apiResource('users', UserController::class);
    Route::apiResource('videos', VideoController::class);
    Route::apiResource('logout', AuthController::class);
});



