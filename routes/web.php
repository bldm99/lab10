<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CentropobladoController;
use App\Http\Controllers\SociosController;
use App\Http\Controllers\RecibosController;
use App\Http\Controllers\PagosController;
use App\Http\Controllers\FotosController;
use App\Http\Controllers\AsociacionController;
use App\Http\Controllers\TrabajadoresController;
use App\Http\Controllers\MantenimientosController;
use App\Http\Controllers\AdquisicionesController;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('principal');
});


/*---------------------------------------------Centro Poblado-----------------------------------------------*/
/*Route::get('/', [CentropobladoController::class , 'indexc'])->name('centropoblado.indexc');*/

Route::get('/createc', [CentropobladoController::class , 'createc'])->name('centropoblado.createc');

Route::get('/listado', [CentropobladoController::class , 'listado'])->name('centropoblado.listado');

/*---------------------------------------------Socios----------------------------------------------*/
Route::get('/listadosc', [SociosController::class , 'listadosc'])->name('socios.listadosc');
Route::get('/consultas', [SociosController::class , 'consultas'])->name('socios.consultas');
Route::get('/create', [SociosController::class , 'create'])->name('socios.create');
Route::get('/homesc', [SociosController::class , 'homesc'])->name('socios.homesc');

/*---------------------------------------------Recibos----------------------------------------------*/
Route::get('/listadore', [RecibosController::class , 'listadore'])->name('recibos.listadore');

/*---------------------------------------------Pagos----------------------------------------------*/
Route::get('/listadopa', [PagosController::class , 'listadopa'])->name('pagos.listadopa');

/*---------------------------------------------Fotos----------------------------------------------*/
Route::get('/listadofo', [FotosController::class , 'listadofo'])->name('fotos.listadofo');

/*---------------------------------------------Asociacion----------------------------------------------*/
Route::get('/listadoaso', [AsociacionController::class , 'listadoaso'])->name('asociacion.listadoaso');

/*---------------------------------------------Trabajadores----------------------------------------------*/
Route::get('/listadotra', [TrabajadoresController::class , 'listadotra'])->name('trabajadores.listadotra');

/*---------------------------------------------Mantenimientos----------------------------------------------*/
Route::get('/listadoman', [MantenimientosController::class , 'listadoman'])->name('mantenimientos.listadoman');

/*---------------------------------------------Adquisiciones----------------------------------------------*/
Route::get('/listadoadq', [AdquisicionesController::class , 'listadoadq'])->name('adquisiciones.listadoadq');




Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
