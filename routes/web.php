<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LockerController;
use App\Http\Controllers\OverduesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

//welcome page
Route::get('/welcome', [WelcomeController::class, 'landing'])->name('welcome');


Route::get('/adminDashboard', [AdminController::class, 'index'])->name('adminDashboard');
Route::get('/addLockers', [LockerController::class, 'create'])->name('addLockers');
Route::get('/overdues', [OverduesController::class, 'show'])->name('overdues');
Route::get('/transactions', [AdminController::class, 'transaction'])->name('transactions');