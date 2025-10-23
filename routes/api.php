<?php

use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\CompanyController;
use Illuminate\Support\Facades\Route;

Route::get('/users', [UserController::class, 'index']);
Route::post('/users', [UserController::class, 'store']);
Route::delete('/users/{id}', [UserController::class, 'destroy']);
Route::apiResource('companies', CompanyController::class);
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware('check.license');
Route::post('/posts', [PostController::class, 'store'])
    ->middleware('check.permission:create_post');
