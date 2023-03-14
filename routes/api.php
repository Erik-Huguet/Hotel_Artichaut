<?php

use App\Http\Controllers\API\AddressController;
use App\Http\Controllers\API\AdvantageController;
use App\Http\Controllers\API\ChamberController;
use App\Http\Controllers\API\ChambersReservationController;
use App\Http\Controllers\API\CommentController;
use App\Http\Controllers\API\DiscountController;
use App\Http\Controllers\API\FooterController;
use App\Http\Controllers\API\InvoiceController;
use App\Http\Controllers\API\InfoNewsController;
use App\Http\Controllers\API\PictureController;
use App\Http\Controllers\API\ReservationController;
use App\Http\Controllers\API\ReservationServicesController;
use App\Http\Controllers\API\RoleController;
use App\Http\Controllers\API\ServicesController;
use App\Http\Controllers\API\TypeChamberController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\UsersAdressController;
use App\Http\Controllers\API\VideoController;
use App\Http\Controllers\AuthController;
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
Route::group(['prefix' => 'v1'], function() {
    // Route::apiResource('advantages', AdvantageController::class);
    Route::apiResource('chambers', ChamberController::class);
    Route::apiResource('comments', CommentController::class);
    Route::apiResource('discounts', DiscountController::class);
    Route::apiResource('infoNews', InfoNewsController::class);
    Route::apiResource('pictures', PictureController::class);
    Route::apiResource('roles', RoleController::class);
    Route::apiResource('type_chambers', TypeChamberController::class);
    Route::apiResource('users', UserController::class);
    Route::apiResource('videos', VideoController::class);
    Route::apiResource('logout', AuthController::class);
    Route::apiResource('reservation', ReservationController::class);
    Route::apiResource('invoice', InvoiceController::class);
    Route::apiResource('address', AddressController::class);
    Route::apiResource('services', ServicesController::class);
    Route::apiResource('footer', FooterController::class);
    Route::apiResource('reservationService', ReservationServicesController::class);
    Route::apiResource('reservationChamber', ChambersReservationController::class);
    Route::apiResource('addressUser', UsersAdressController::class);

});


Route::post('/register', [AuthController::class, 'register']);
//Cette méthode à pour objecctif de générer et de renvoyer le token lorsque le mdp et le mail match
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum', 'web');

//Route::group(["middleware"  => ["auth:sanctum", "web"]], function () {
//    //Route::get('/me', [AuthController::class ,'me']);
//    Route::apiResource("/advantages", AdvantageController::class);
//});



Route::middleware('auth:sanctum')->group( function() {
    Route::apiResource('/Reservation', ReservationController::class);
    Route::delete('/users',[UserController::class, "destroy"]);
});




