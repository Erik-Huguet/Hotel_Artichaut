<?php



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


//Route::apiResource('discounts', DiscountController::class);

Route::get('discounts', [DiscountController::class, 'index']);
Route::get('news', [NewsController::class, 'index']);
Route::get('pictures', [PictureController::class, 'index']);
Route::get('roles', [RoleController::class, 'index']);
Route::get('types_chambers', [TypeChamberController::class, 'index']);


//Route::apiResource('comments',CommentController::class);
Route::get('comments',[CommentController::class,'index']);


//Route::apiResource('users',UserController::class);
Route::get('Users',[UserController::class,'index']);

//Route::apiResource('videos',VideoController::class);
Route::get('videos',[VideoController::class,'index']);


