<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\diarioController;


/* Route::get('/', [diarioController::class, 'metodoInicio'])->name('apodoInicio');

Route::get('/formularios', [diarioController::class, 'metodoFormularios'])->name('apodoFormularios');

Route::get('/recuerdos', [diarioController::class, 'metodoRecuerdos'])->name('apodoRecuerdos');
 */

    Route::controller(diarioController ::class)->group(function(){

    Route::get('/', 'metodoInicio')->name('apodoInicio');
    Route::get('/formulario', 'metodoFormulario')->name('apodoFormulario');
    Route::get('/recuerdos', 'metodoRecuerdos')->name('apodoRecuerdos');
    Route::post('/guardarRecuerdo', [diarioController::class, 'metodoGuardar'])->name('Guardar');
}
);



/* Route::view('/', 'welcome');

Route::view('/formularios', 'formularios');

Route::view('/recuerdos', 'recuerdos'); */
