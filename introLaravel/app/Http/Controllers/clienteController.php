<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorCliente;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class clienteController extends Controller
{
    public function home ()
    {
        return view('inicio');
    }

    /**
     * Muestra la consulta del CRUD
     */
    public function index()
    {

        $consultaClientes = DB::table('clientes')->get();

        return view('cliente', compact('consultaClientes') );
    }

    /**
     * Funcion destinada para abrir el formulario
     */
    public function create()
    {
        return view('formulario');
    }

    /**
     * Lo usamos para ejecutar el insert
     */
    public function store(validadorCliente $request)
    {
        DB::table('clientes')->insert([
            'nombre'=>$request->input('txtnombre'),
            'apellido'=>$request->input('txtapellido'),
            'correo'=>$request->input('txtcorreo'),
            'telefono'=>$request->input('txttelefono'),
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
        ]);

        $usuario = $request->input('txtnombre');
        session()->flash('exito','Se guardo el usuario: '.$usuario);
        
        return to_route('rutaformulario');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(validadorCliente $request, string $id)
    {
        $consultaCliente = DB::table('clientes')
            ->where('id', $id)
            ->update([
                'nombre'=>$request->input('txtnombre'),
                'apellido'=>$request->input('txtapellido'),
                'correo'=>$request->input('txtcorreo'),
                'telefono'=>$request->input('txttelefono'),
                'updated_at'=> Carbon::now(),
            ]);

        $usuario = $request->input('txtnombre');
        session()->flash('exitoupdate','Se actualizo el usuario: '.$usuario);
        
        return to_route('rutaclientes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, string $nombre)
    {
        $consultaCliente = DB::table('clientes')
            ->where('id', $id)
            ->delete();
        
        session()->flash('exitodelete','Se elimino el usuario: '.$nombre);
        return to_route('rutaclientes');
    }
}
