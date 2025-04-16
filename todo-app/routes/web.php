<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('index',[TodoController::class,'index'])->name('index');
Route::get('/',[TodoController::class,'index'])->name('index');
Route::get('create',[TodoController::class,'create'])->name('create');
Route::post('store',[TodoController::class,'store'])->name('store');
Route::get('edit/{id}',[TodoController::class,'edit'])->name('edit');
Route::post('update/{id}',[TodoController::class,'update'])->name('update');
Route::get('destroy/{id}',[TodoController::class,'destroy'])->name('destroy');
Route::get('show/{id}',[TodoController::class,'show'])->name('show');




