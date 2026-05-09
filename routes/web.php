<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::resources([
    'dashboard' => DashboardController::class,
    'about' => AboutController::class,
    'contact' => ContactController::class,
]);
