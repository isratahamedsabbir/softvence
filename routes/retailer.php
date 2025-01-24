<?php

use App\Http\Controllers\Web\Retailer\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get("dashboard", [DashboardController::class, 'index'])->name('dashboard');