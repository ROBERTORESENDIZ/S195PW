<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorFrituras extends Controller
{
    
public function abrirFormulario(){
    return view('formFRituras');
 
}

public function guadarFritura(){
    return "Se envio al formulario";
}

}
