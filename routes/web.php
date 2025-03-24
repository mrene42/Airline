<?php

use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlaneController;
use App\Http\Controllers\FlightController;

/*Route::get('/', function () {
    return view('welcome');
}); */

//Auth::routes();

//Plane routes
Route::get('/planes', [PlaneController::class, 'index'])->name('planeHome');
Route::delete('/planes/{id}',[PlaneController::class,'destroy'])->name('planeDelete')->middleware(IsAdmin::class, 'auth');
Route::post('/planes',[PlaneController::class,'store'])->name('planeStore');
Route::put('/planes/{id}',[PlaneController::class,'update'])->name('planeUpdate');
Route::get('/planes/{id}', [PlaneController::class, 'show'])->name('planeShow');

//Flight routes
Route::get('/flights', [FlightController::class, 'index'])->name('flightHome');
Route::delete('/flights/{id}',[FlightController::class,'destroy'])->name('flightDelete');
Route::post('/flights',[FlightController::class,'store'])->name('flightStore');
Route::put('/flights/{id}',[FlightController::class,'update'])->name('flightUpdate');
Route::get('/flights/{id}', [FlightController::class, 'show'])->name('flightShow');

//Error blade
Route::get('/errorblade', function () {
    return view('errorBlade');
})->name('errorBlade');