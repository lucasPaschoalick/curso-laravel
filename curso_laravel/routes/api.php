<?php

use App\Http\Controllers\ApiSearchController;

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


// endpoints para acessar a API

// método utilizando apiResource
Route::apiResource('eventos', \App\Http\Controllers\ApiSearchController::class);

// método sem utilizar apiResource
// Route::get('/eventos', [ApiSearchController::class, 'index']);
// Route::get('/eventos/{id}', [ApiSearchController::class, 'show']);
