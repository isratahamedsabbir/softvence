<?php

use App\Http\Controllers\Web\User\DashboardController;
use Illuminate\Support\Facades\Route;


Route::get("client/dashboard", [DashboardController::class, 'index'])->name('client.dashboard');

