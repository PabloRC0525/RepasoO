<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorFormDiario;

class diarioController extends Controller
{
    public function metodoInicio(){
        return view('welcome');
    }

    public function metodoFormulario(){
        return view('formulario');
    }

    public function metodoRecuerdos(){
        return view('recuerdos');
    }

    public function metodoGuardar(validadorFormDiario $req) {
        $tituloLibro = $req->input('txtTitulo'); // Obtener el valor del campo txtTitulo
    
        return redirect('/formulario')->with('confirmación', "Todo correcto: Libro $tituloLibro guardado");
    }
}
