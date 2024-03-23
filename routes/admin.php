<?php


// Admin routes

use App\Http\Controllers\Backend\AdminController;
use Illuminate\Routing\Route;

Route::get('admin/dashboard',[AdminController::class, 'dashboard'])->middleware('auth', 'role:admin')->name('admin.dashboard');
