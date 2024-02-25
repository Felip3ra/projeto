<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\InscritoController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

//Rotas a serem implementadas
Route::get('/Index-inscritos',[InscritoController::class,'index'])->name('inscrito.index');
Route::get('/Create-inscritos',[InscritoController::class,'create'])->name('inscrito.create');
Route::post('/Store-inscritos',[InscritoController::class,'store'])->name('inscrito.store');
Route::get('/Show-inscritos/{inscrito}',[InscritoController::class,'show'])->name('inscrito.show');
Route::get('/Edit-inscritos/{inscrito}',[InscritoController::class,'edit'])->name('inscrito.edit');
Route::put('/Update-inscritos/{inscrito}',[InscritoController::class,'update'])->name('inscrito.update');
Route::delete('/Destroy-inscritos/{inscrito}',[InscritoController::class,'destroy'])->name('inscrito.destroy');

Route::get('/Index-cursos',[CursoController::class,'index'])->name('curso.index');
Route::get('/Create-cursos',[CursoController::class,'create'])->name('curso.create');
Route::get('/Store-cursos',[CursoController::class,'store'])->name('curso.store');
Route::get('/Edit-cursos',[CursoController::class,'edit'])->name('curso.edit');
Route::put('/Update-cursos',[CursoController::class,'update'])->name('curso.update');
Route::delete('/Destroy-cursos',[CursoController::class,'destroy'])->name('curso.destroy');
