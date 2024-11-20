<?php
use App\Http\Controllers\AddLockerController;
use Illuminate\Support\Facades\Route;

Route::get('addLockers', [AddLockerController::class, 'index']);
Route::post('addLockers', [AddLockerController::class, 'store']);
Route::put('addLockers/{id}', [AddLockerController::class, 'update']);
Route::delete('addLockers/{id}', [AddLockerController::class, 'destroy']);
