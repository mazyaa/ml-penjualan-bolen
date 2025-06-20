<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

<<<<<<< HEAD
Route::get('/products', function () {
    return view('products');
})->middleware(['auth'])->name('products');

Route::get('/sales-history', function () {
    return view('sales-history');
})->middleware(['auth'])->name('sales.history');

=======
>>>>>>> abbd64e3b7fce6c42c45fedfffeb3026645e2067
require __DIR__.'/auth.php';
