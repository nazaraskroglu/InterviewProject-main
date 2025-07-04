<?php

use App\Http\Controllers\CompanyController;
use Illuminate\Support\Facades\Route;

Route::prefix('/company')->group(function () {
    Route::post('/add', [CompanyController::class, 'create']);
    Route::get('/all', [CompanyController::class, 'all']);
    Route::get('/get', [CompanyController::class, 'get']);
    Route::put('/edit', [CompanyController::class, 'update']);
    Route::delete('/remove', [CompanyController::class, 'delete']);
});

