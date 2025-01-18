<?php

use App\Http\Controllers\Web\User\DashboardController;
use Illuminate\Support\Facades\Route;


Route::get("dashboard", [DashboardController::class, 'index'])->name('dashboard');

