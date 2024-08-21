<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/',[TodoController::class,'index'])->name('todos.index');
Route::get('/todos/create',[TodoController::class,'create'])->name('todos.create');
Route::post('/todos',[TodoController::class,'store'])->name('todos.store');

