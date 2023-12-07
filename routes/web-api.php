<?php

use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Route;

Route::name('webapi.')->middleware(['auth','verified'])->group(function(){
    Route::resource('rooms', RoomController::class)->only([
        'store',
        'destroy'
    ]);
});
