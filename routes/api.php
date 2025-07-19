<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;

// Registro
Route::post('/register', [AuthController::class, 'register']);

// Login
Route::post('/login', [AuthController::class, 'login']);

// Usuario autenticado
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Logout
Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, 'logout']);

Route::get('/ping', function () {
    return response()->json(['message' => 'API funcionando']);
});