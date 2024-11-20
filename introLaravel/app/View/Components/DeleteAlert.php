<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DeleteAlert extends Component
{
    public $nombreCliente;
    public $numCliente;

    public function __construct($nombreCliente, $numCliente)
    {
        $this->nombreCliente=$nombreCliente;
        $this->numCliente=$numCliente;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.delete-alert');
    }
}
