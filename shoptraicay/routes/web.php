<?php
use App\Http\Controllers\FruitController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FruitController::class, 'index'])->name('fruits.index');
Route::get('/danhsach', [FruitController::class, 'danhsach'])->name('fruits.danhsach');

Route::get('/fruits/create', [FruitController::class, 'create'])->name('fruits.create');
Route::post('/fruits', [FruitController::class, 'store'])->name('fruits.store');

Route::get('/fruits/{id}', [FruitController::class, 'show'])->name('fruits.show');
Route::get('/fruits/{id}/edit', [FruitController::class, 'edit'])->name('fruits.edit');
Route::put('/fruits/{id}', [FruitController::class, 'update'])->name('fruits.update');

Route::delete('/fruits/{fruit}', [FruitController::class, 'destroy'])->name('fruits.destroy');

