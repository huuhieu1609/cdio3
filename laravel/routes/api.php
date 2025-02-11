<?php

use App\Http\Controllers\vieclamController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//admin
Route::get('viec-lam', [vieclamController::class, 'vieclam']);
Route::post('add-viec-lam',[vieclamController::class,'addvieclam']);
Route::post('edit-viec-lam',[vieclamController::class,'editvieclam']);
Route::post('delete-viec-lam',[vieclamController::class,'delvieclam']);
//end admin
