<?php

use App\Http\Controllers\API\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
//
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
 return $request->user();
});
Route::controller(RegisterController::class)->group(function(){
    Route::post('register', 'register');
    Route::post('login', 'login');
});
Route::middleware('auth:sanctum')->group( function () {
    Route::get('getMedicinesForClass',[RegisterController::class,'getMedicinesForClass']);
    Route::get('getClassifications',[RegisterController::class,'getClassifications']);
    Route::get('getMedicine',[RegisterController::class,'getMedicine']);
    Route::post('logout', [RegisterController::class,'logout']);
    Route::post('store',[\App\Http\Controllers\Web\WebMedicinesController::class,'store']);

});
<<<<<<< HEAD
// ayatttttttt
// meow

=======
>>>>>>> ayat
