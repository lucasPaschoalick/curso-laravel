<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);

// events
Route::get('/events/create', [EventController::class, 'create'])->middleware('auth');
Route::get('/events/{id}', [EventController::class, 'show']);
Route::get('/events/edit/{id}', [EventController::class, 'edit'])->middleware('auth');

Route::post('/events', [EventController::class, 'store']);
Route::post('/events/join/{id}', [EventController::class, 'joinEvent'])->middleware('auth');

Route::put('/events/update/{id}', [EventController::class, 'update'])->middleware('auth');

Route::delete('/events/{id}', [EventController::class, 'destroy'])->middleware('auth');
Route::delete('/events/leave/{id}', [EventController::class, 'leaveEvent'])->middleware('auth');

// eventos
Route::get('/eventos', function () {
    return view('/eventos_api/eventos', ['events' => null, 'search' => null]);
});

// dashboard
Route::get('/dashboard', [EventController::class, 'dashboard'])->middleware('auth');


