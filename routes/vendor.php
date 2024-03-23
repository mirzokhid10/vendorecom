<?php

// Vendor routes

use App\Http\Controllers\Backend\VendorController;
use Illuminate\Routing\Route;

Route::get('dashboard',[VendorController::class, 'dashboard'])->name('dashboard');
