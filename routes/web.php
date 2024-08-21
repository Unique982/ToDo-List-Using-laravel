<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/',[TodoController::class,'index'])->name('todos.index');
Route::get('/todos/create',[TodoController::class,'create'])->name('todos.create');
Route::post('/todos',[TodoController::class,'store'])->name('todos.store');
Route::get('{id}',[TodoController::class,'show'])->name('todos.show');
Route::get('{id}/edit',[TodoController::class,'edit'])->name('todos.edit');
Route::put('{id}',[TodoController::class,'update'])->name('todos.update');
Route::delete('{id}',[TodoController::class,'destroy'])->name('todos.destroy');

