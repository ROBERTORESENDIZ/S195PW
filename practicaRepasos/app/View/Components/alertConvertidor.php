<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class alertConvertidor extends Component
{
    //Atributos del componente
    public $resultado;

    //Asiganción de valores al instanciar el componente
    public function __construct($r)
    {
        $this->resultado =  $r;
    }

   
    public function render(): View|Closure|string
    {
        return view('components.alert-convertidor');
    }
}
