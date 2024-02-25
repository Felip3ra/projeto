<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\InscritoController;
use App\Http\Controllers\UsuarioController;
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
Route::post('/Store-cursos',[CursoController::class,'store'])->name('curso.store');
Route::get('/Show-cursos/{curso}',[CursoController::class,'show'])->name('curso.show');
Route::get('/Edit-cursos/{curso}',[CursoController::class,'edit'])->name('curso.edit');
Route::put('/Update-cursos/{curso}',[CursoController::class,'update'])->name('curso.update');
Route::delete('/Destroy-cursos/{curso}',[CursoController::class,'destroy'])->name('curso.destroy');

Route::get('/Index-usuarios',[UsuarioController::class,'index'])->name('usuario.index');
Route::get('/Create-usuarios',[UsuarioController::class,'create'])->name('usuario.create');
Route::post('/Store-usuarios',[UsuarioController::class,'store'])->name('usuario.store');
Route::get('/Show-usuarios/{usuario}',[UsuarioController::class,'show'])->name('usuario.show');
Route::get('/Edit-usuarios/{usuario}',[UsuarioController::class,'edit'])->name('usuario.edit');
Route::put('/Update-usuarios/{usuario}',[UsuarioController::class,'update'])->name('usuario.update');
Route::delete('/Destroy-usuarios/{usuario}',[UsuarioController::class,'destroy'])->name('usuario.destroy');
