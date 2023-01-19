<?php

use App\Http\Controllers\MovieController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::apiResource('movies', MovieController::class);


Route::middleware(['auth:sanctum', 'ver'])->get('/user', function (Request $request) {

    return $request->user();

});

// Route::middleware('auth:sanctum', )->group(function () {

// Route::apiResource('movies', MovieController::class);

Route::post('login',[AuthController::class,'login']);
Route::get('movies', [MovieController::class, 'index']);
Route::post('movies', [MovieController::class, 'store']);
Route::get('movies/{id}', [MovieController::class, 'show']);
Route::put('movies/{id}', [MovieController::class, 'update']);
Route::delete('movies/{id}', [MovieController::class, 'destroy']);

Route::get('rentals', [MovieController::class, 'index']);
Route::post('rentals', [MovieController::class, 'store']);
Route::get('rentals/{id}', [MovieController::class, 'show']);
Route::put('rentals/{id}', [MovieController::class, 'update']);
Route::delete('rentals/{id}', [MovieController::class, 'destroy']);



// });



