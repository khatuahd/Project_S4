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

Route::get('/', function(){
     return view('welcome');
 });

 Route::get('/questions', function () {
    return view('Questions.questions');
});

Route::get('/quizes', [App\Http\Controllers\QuizController::class, 'index'])->name('index');
Route::get('/qcreate', [App\Http\Controllers\QuizController::class, 'qcreate'])->name('qcreate');
Route::post('/', [App\Http\Controllers\QuizController::class, 'store'])->name('store');
// Route::get('/{id}', [App\Http\Controllers\QuizController::class, 'show'])->name('show');
Route::get('/{id}/edit', [App\Http\Controllers\QuizController::class, 'edit'])->name('edit');
Route::put('/{id}', [App\Http\Controllers\QuizController::class, 'update'])->name('update');
Route::delete('/{id}', [App\Http\Controllers\QuizController::class, 'destroy'])->name('destroy');

Route::get('/create', [App\Http\Controllers\QuestionsController::class, 'create'])->name('create');
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/questions', [App\Http\Controllers\QuestionsController::class, 'index'])->name('questions');
Route::post('questions', [App\Http\Controllers\QuestionsController::class, 'store'])->name('store');


// Route::get('/reponse', [EtudiantController::class, "index"])->name("reponse");
// Route::get('/reponse/create', [EtudiantController::class, "create"])->name("reponse.create");

// Route::get('/reponse/{reponse}', [EtudiantController::class, "edit"])->name("reponse.edit");

// Route::post('/reponse/create', [EtudiantController::class, "store"])->name("reponse.ajouter");
// Route::delete('/reponse/{reponse}', [EtudiantController::class, "delete"])->name("reponse.supprimer");
// Route::put('/reponse/{reponse}', [EtudiantController::class, "update"])->name("reponse.update");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
