<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class repasoConvertidor extends Controller
{
    //Metodo para rendizar la vista
    public function vista (){
        return view('repaso1');
    }


    // Metodo para conversiones entre MB y GB.
    public function proceso1 (Request $valores){
        
        if($valores->get('TipoC')==1){
            // Conversion de MB a GB
            $vf = ($valores->get('Cantidad'))/1000;
            $texto = $valores->get('Cantidad')." MB equivale a ".$vf." GB";

        } elseif ($valores->get('TipoC')==2){
            // Conversion de GB a MB
            $vf = ($valores->get('Cantidad'))*1000;
            $texto = $valores->get('Cantidad')." GB equivale a ".$vf." MB";
        }

        return view('repaso1',['resultado' => $texto]);
    }
    

    // Metodo para conversiones entre GB y TB.
    public function proceso2 (Request $valores){
        
        if($valores->get('TipoC')==1){
            // Conversion de GB a TB
            $vf = ($valores->get('Cantidad'))/1000;
            $texto = $valores->get('Cantidad')." GB equivale a ".$vf." TB";

        } elseif ($valores->get('TipoC')==2){
            // Conversion de TB a GB
            $vf = ($valores->get('Cantidad'))*1000;
            $texto = $valores->get('Cantidad')." TB equivale a ".$vf." GB";
        }

        return view('repaso1',['resultado' => $texto]);
    }
}
