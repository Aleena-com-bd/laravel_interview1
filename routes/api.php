<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ProductController;

// Default API route for user (can be removed if not needed)
Route::get('/user', function (Request $request) {
    return $request->user();
});

// Task management routes
Route::apiResource('tasks', TaskController::class);
