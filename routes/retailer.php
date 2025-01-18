<?php

use App\Http\Controllers\Web\Retailer\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get("retailer/dashboard", [DashboardController::class, 'index'])->name('retailer.dashboard');