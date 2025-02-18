<?php

use App\Http\Controllers\Web\Developer\CmsController;
use App\Http\Controllers\Web\Developer\DashboardController;
use Illuminate\Support\Facades\Route;



Route::get("dashboard", [DashboardController::class, 'index'])->name('dashboard');


//CMS
Route::prefix('cms')->name('cms.')->group(function () {

    Route::prefix('demo')->name('demo.')->controller(CmsController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::get('/{id}', 'show')->name('show');
        Route::get('/{id}/edit', 'edit')->name('edit');
        Route::patch('/{id}', 'update')->name('update');
        Route::delete('/{id}', 'destroy')->name('destroy');
        Route::get('/{id}/status', 'status')->name('status');
        
        Route::put('/content', 'content')->name('content');
    });

});