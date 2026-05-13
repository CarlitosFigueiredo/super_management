<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
use Illuminate\Support\Facades\Route;

Route::resources([
    'dashboard' => DashboardController::class,
    'about' => AboutController::class,
    'contact' => ContactController::class,

    'client' => ClientController::class,
    'supplier' => SupplierController::class,
    'product' => ProductController::class,
]);

Route::fallback(function () {
    return redirect()->route('dashboard.index');
});
