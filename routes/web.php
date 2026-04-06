<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\Admin\RoomController as AdminRoomController;

Route::get('/', [MainController::class, 'index']);

Route::get('/about', [MainController::class, 'about']);

Route::get('/rooms', [RoomController::class, 'index']);

Route::get('/rooms/{id}', [RoomController::class, 'show']);

Route::resource('admin/rooms', AdminRoomController::class);