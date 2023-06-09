<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CtlFuenteFondoController;
use App\Http\Controllers\CtlEstadoProyectoController;
use App\Http\Controllers\CtlInstitucionController;
use App\Http\Controllers\MntProyectoController;
use App\Http\Controllers\ReportesController;
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
    return view('layouts.app');
});

Route::resource('ctl-fuente-fondos', CtlFuenteFondoController::class);
Route::resource('ctl-estado-proyectos', CtlEstadoProyectoController::class);
Route::resource('ctl-institucion', CtlInstitucionController::class);
Route::resource('mnt-proyectos', MntProyectoController::class);

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/reporte/proyecto/{id}', [ReportesController::Class, 'proyectoPdf'])->name('reporte.proyecto.pdf');
Route::get('/reporte/proyectos/', [ReportesController::Class, 'listadoProyectoPdf'])->name('reporte.proyectos.pdf');
