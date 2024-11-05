<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorFrituras extends Controller
{
    
public function abrirFormulario(){
    return view('formFRituras');
 
}

public function guadarFritura(request $datos){
    $validados = $datos->validate([
        'nombre'=>'required',
        'sabor'=>'required',
        'peso'=>'required',
    ]);

    $nomFritura=$datos->input('nombre'); 

    session()->flash('fritura','Almacenando en BD: '.$nomFritura);

    return to_route('rutaform');
}

}
