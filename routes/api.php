<?php

use App\Http\Controllers\GarageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::middleware([])->group(function () {

    Route::get('/garage/door', [GarageController::class, 'door'])->name('garage-door');
});

