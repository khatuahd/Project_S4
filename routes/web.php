<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [QuizController::class, 'index'])->name('index');
Route::get('/create', [QuizController::class, 'create'])->name('create');
Route::post('/', [QuizController::class, 'store'])->name('store');
// Route::get('/{id}', [QuizController::class, 'show'])->name('show');
Route::get('/{id}/edit', [QuizController::class, 'edit'])->name('edit');
Route::put('/{id}', [QuizController::class, 'update'])->name('update');
Route::delete('/{id}', [QuizController::class, 'destroy'])->name('destroy');
