<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\StatisticController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('admins', [AdminController::class, 'index']);
Route::get('users', [UserController::class, 'index']);

Route::get('statistics', [StatisticController::class, 'index']);
Route::get('tasks', [TaskController::class, 'index']);
Route::post('tasks', [TaskController::class, 'store']);
