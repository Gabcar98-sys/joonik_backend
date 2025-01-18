<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\locationController;



Route::group([
    'middleware' => \App\Http\Middleware\Api_key::class
], function () {
    Route::get('/locations', [locationController::class, 'index']);
});