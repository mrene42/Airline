<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\FlightController;
use App\Http\Controllers\Api\PlaneController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/plane', [PlaneController::class, 'index'])->name('apiplaneHome');
Route::delete('/plane/{id}',[PlaneController::class,'destroy'])->name('apiplaneDelete');
Route::post('/plane',[PlaneController::class,'store'])->name('apiplaneStore');
Route::put('/plane/{id}',[PlaneController::class,'update'])->name('apiplaneUpdate');
Route::get('/plane/{id}', [PlaneController::class, 'show'])->name('apiplaneShow');

Route::get('/flight', [FlightController::class, 'index'])->name('apiflightHome');
Route::delete('/flight/{id}',[FlightController::class,'destroy'])->name('apiflightsDelete');
Route::post('/flight',[FlightController::class,'store'])->name('apiflightsStore');
Route::put('/flight/{id}',[FlightController::class,'update'])->name('apiflightsUpdate');
Route::get('/flight/{id}', [FlightController::class, 'show'])->name('apiflightsShow');