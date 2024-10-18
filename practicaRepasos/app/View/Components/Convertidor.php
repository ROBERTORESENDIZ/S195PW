<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Convertidor extends Component
{
    //Atributos del componente
    public $titulo;
    public $conversion1;
    public $conversion2;
    public $tipo;

    //Asiganción de valores al instanciar el componente
    public function __construct($t, $c1, $c2, $tp)
    {
        $this->titulo = $t;
        $this->conversion1 = $c1;
        $this->conversion2 = $c2;
        $this->tipo = $tp;
        
    }

    public function render(): View|Closure|string
    {
        return view('components.convertidor');
    }
}
