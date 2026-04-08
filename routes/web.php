<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\Admin\RoomController as AdminRoomController;

Route::get('/', [MainController::class, 'index'])->name('home');

Route::get('/about', [MainController::class, 'about'])->name('about');

Route::get('/rooms', [RoomController::class, 'index'])->name('public.rooms');
Route::get('/rooms/{id}', [RoomController::class, 'show'])->name('public.rooms.show');

Route::get('/dashboard', function () {
    return redirect()->route('rooms.index');
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('admin/rooms', AdminRoomController::class);
    
});

require __DIR__.'/auth.php';