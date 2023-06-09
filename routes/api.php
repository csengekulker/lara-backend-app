<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShipController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/ships', [ShipController::class, 'index']);
Route::post('/store', [ShipController::class, 'store']);
Route::put('/update/{id}', [ShipController::class, 'update']);
Route::delete('/delete/{id}', [ShipController::class, 'destroy']);
