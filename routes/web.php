<?php

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
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Rutas Docentes
Route::get('/dashboard/docente', [App\Http\Controllers\directorController::class, 'indexdocente'])->name('indexdocente.index');

//Rutas Director
Route::get('/dashboard/director', [App\Http\Controllers\directorController::class, 'indexdirector'])->name('admindirector.index');

//Rutas Alumno
Route::get('/dashboard/alumno', [App\Http\Controllers\alumnoController::class, 'indexalumno'])->name('indexalumno.index');
