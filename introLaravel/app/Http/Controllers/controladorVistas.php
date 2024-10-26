<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorCliente;

class controladorVistas extends Controller
{
    public function home ()
    {
        return view('inicio');
    }

    public function formulario ()
    {
        return view('formulario');
    }

    public function consulta()
    {
        return view('cliente');
    }

    public function procesarCliente(validadorCliente $peticion)
    {
        //VALIDACION POR PARTE DEL CONTROLADOR 
        
        // $validacion= $peticion->validate([
        //     'txtnombre'=>'required,
        //     'txtapellido'=>'required',
        //     'txtcorreo'=>'required',
        //     'txttelefono'=>'required,
        // ]);




        //redirecion con mensaje en sesion 
        $usuario = $peticion->input('txtnombre');
        session()->flash('exito','Se guardo el usuario: '.$usuario);
        
        return to_route('rutaformulario');

        // Redireccionando usando la ruta
        //return redirect('/');

        // Redireccionando usando el apodo
        //return redirect()->route('rutaclientes');

        // Redireccionando al origen de la peticion
        //return back();

        //redireccion con valores de retorno (compact es más seguro)
        // $id = [['usuario'=>1],['usuario'=>2]];
        // return view('formulario', compact("id"));



    }
}
