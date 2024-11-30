<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consulta = cliente::all();
        return view('cliente', compact('consulta'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formulario');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $addCliente = new cliente();
        $addCliente -> nombre = $request->input('txtnombre');
        $addCliente -> apellido = $request->input('txtapellido');
        $addCliente -> correo = $request->input('txtcorreo');
        $addCliente -> telefono = $request->input('txttelefono');

        $addCliente ->save();
        $msj = $request->input('txtnombre');

        session()->flash('exito','Se guardo el usuario: '.$msj);
        
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     */
    public function show(cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, cliente $cliente)
    {
        
        $cliente -> nombre = $request->input('nombre');
        $cliente -> apellido = $request->input('apellido');
        $cliente -> correo = $request->input('correo');
        $cliente -> telefono = $request->input('telefono');

        $cliente ->save();

        $msj = $request->input('nombre');

        session()->flash('exitoupdate','Se actualizo el usuario: '.$msj);
        
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cliente $cliente)
    {
        $cliente->delete();
        session()->flash('exitoupdate','Se elimino correctamente');
        return redirect()->back();
    }
}
