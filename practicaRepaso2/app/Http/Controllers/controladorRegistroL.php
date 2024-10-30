<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorLibro;

class controladorRegistroL extends Controller
{
    
    public function vistaRegistroL (){
        return view('registrarLibro');
    }

    public function guardadLibro (validadorLibro $registro){
        $libro = $registro->input('titulo');
        session()->flash('confirmacion','Todo correcto: Libro '. $libro.' Guardado correctamente');
        
        return to_route('rutaregistrarlibro');
    }


}
