<?php

use App\Http\Controllers\ContaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/contas', [ContaController::class, 'index'])->name('contas.index');
Route::get('/contas/create', [ContaController::class, 'create'])->name('contas.create');
Route::post('/contas/store', [ContaController::class, 'store'])->name('contas.store');
Route::get('/contas/show', [ContaController::class, 'show'])->name('contas.show');
Route::get('/contas/edit/{id}', [ContaController::class, 'edit'])->name('contas.edit');
Route::put('/contas/update', [ContaController::class, 'update'])->name('contas.update');
Route::delete('/contas/destroy', [ContaController::class, 'destroy'])->name('contas.destroy');
