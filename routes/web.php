<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TareaController;

Route::get('/tareas', [TareaController::class, 'index'])->name('tareas.index');
Route::get('/tareas/crear', [TareaController::class, 'create'])->name('tareas.create');
Route::post('/tareas', [TareaController::class, 'store'])->name('tareas.store');
Route::get('/tareas/{tarea}/editar', [TareaController::class, 'edit'])->name('tareas.edit');
Route::put('/tareas/{tarea}', [TareaController::class, 'update'])->name('tareas.update');
Route::delete('/tareas/{tarea}', [TareaController::class, 'destroy'])->name('tareas.destroy');
