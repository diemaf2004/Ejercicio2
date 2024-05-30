<?php

use Illuminate\Support\Facades\Route;

Route::get('/asociar',[TruckTruckdriverController::class,'index']);
Route::post('asociar/store',[TruckTruckdriverController::class,'store'])->name('truck_truck_driver.store');

