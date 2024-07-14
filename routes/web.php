<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrackController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\CustomerController;

Route::get('/', function () {
    return view('welcome');
});

Route::resources([
    'track' => TrackController::class,
    'employee' => EmployeeController::class,
    'customer' => CustomerController::class,
]);
