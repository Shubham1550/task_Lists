<?php


use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/',[TaskController::class,'index'])->name('tasks.index');
Route::post('/task/create', [TaskController::class, 'store'])->name('tasks.create');
Route::delete('/task/delete/{task}', [TaskController::class, 'destroy'])->name('task.destroy');
