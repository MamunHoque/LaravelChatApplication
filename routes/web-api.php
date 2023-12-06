<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Route;

Route::name('webapi.')->middleware(['auth','verified'])->group(function(){
    Route::get('/users', [UserController::class, 'getUser'])->name('users.list');
    Route::resource('rooms', RoomController::class);
});
