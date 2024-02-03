<?php

use App\Http\Controllers\CitaController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CocheController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

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

Route::resource('coches', CocheController::class)->middleware(['auth', 'verified']);
Route::resource('marca', MarcaController::class)->middleware(['auth', 'verified']);
Route::resource('citas', CitaController::class)->middleware(['auth', 'verified']);

require __DIR__.'/auth.php';
