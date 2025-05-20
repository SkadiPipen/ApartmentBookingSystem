<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('landing');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/MaintenanceReq', function () {
    return view('admin_maintenance');
});
