<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculatorController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/test', function() {
    return "hello";
});

Route::get('/testAPI', [CalculatorController::class, "testAPI"]);

Route::get('/caculator', [CalculatorController::class, "plus"]);