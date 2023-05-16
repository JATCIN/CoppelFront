<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\SeguimientoDenunciaController;
use App\Http\Controllers\DenunciaController;
use App\Http\Controllers\DenunciasController;
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

Route::get('/seguimientoDenuncia',[SeguimientoDenunciaController::class, 'create'])->name('seguimientoDenuncia');
Route::post('/seguimientoDenuncia',[SeguimientoDenunciaController::class, 'store'])->name('SeguimientoDenuncia.store');


Route::get('/denuncia',[DenunciaController::class, 'create'])->name('denuncia');
Route::post('/denuncia',[DenunciaController::class, 'store'])->name('denuncia.store');

Route::get('/denuncias',[DenunciasController::class, 'index'])->name('denuncias.index');
Route::get('/denuncias/{denuncias_id}',[DenunciasController::class, 'view'])->name('denuncias.view');
Route::post('/denuncias/update',[DenunciasController::class, 'update'])->name('denuncias.update');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
