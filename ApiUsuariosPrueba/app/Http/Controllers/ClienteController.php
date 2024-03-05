<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Cliente::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'usuario' => 'required',
        'nombres' => 'required',
        'apellidos' => 'required',
        'departamento' => 'required',
        'cargo' => 'required',
        'email' => 'required',
    ]);

    $cliente = new Cliente;
    $cliente->usuario = $request->usuario;
    $cliente->nombres = $request->nombres;
    $cliente->apellidos = $request->apellidos;
    $cliente->departamento = $request->departamento;
    $cliente->cargo = $request->cargo;
    $cliente->email = $request->email;
    $cliente->save();

    return $cliente;
}

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        return $cliente;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente)
{
    $request->validate([
        'usuario' => 'required',
        'nombres' => 'required',
        'apellidos' => 'required',
        'departamento' => 'required',
        'cargo' => 'required',
        'email' => 'required',
    ]);

    $cliente->usuario = $request->usuario;
    $cliente->nombres = $request->nombres;
    $cliente->apellidos = $request->apellidos;
    $cliente->departamento = $request->departamento;
    $cliente->cargo = $request->cargo;
    $cliente->email = $request->email;
    $cliente->save();

    return $cliente;
}
    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $cliente = Cliente::find($id);
        if (is_null($cliente))
        {
            return response()->json('No se pudo realizar correctamente la operacion',404);
        }
        $cliente->delete();
        return response()->noContent();
    }
}

