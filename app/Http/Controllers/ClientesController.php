<?php

namespace App\Http\Controllers;


use App\Clientes;
use App\Http\Requests\ClientesRequest;


use Illuminate\Http\Request;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Clientes::all();
        
        return view('clientes.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientesRequest $request)
    {
        $clientes = Clientes::create($request->all());

        return redirect()->route('clientes.ver')
        ->with('info', 'Cliente Nuevo creado con éxito');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function show(Clientes $clientes)
    {
        return view('clientes.show', compact('clientes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function edit(Clientes $clientes)
    {
        return view('clientes.edit', compact('clientes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Clientes $clientes)
    {
       $clientes->update($request->all());

       return redirect()->route('clientes.ver')
       ->with('info', 'Cliente Modificado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Clientes $clientes)
    {
        $clientes->delete();

        return back()->with('info','Eliminado correctamente'); 
    }

    /**
     * MENU IZQUIERDA
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function modificar()
    {
        $clientes = Clientes::all();
        return view('clientes.modificar', compact('clientes'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function ver()
    {
        $clientes = Clientes::all();
        return view('clientes.ver', compact('clientes'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function eliminar()
    {
        $clientes = Clientes::all();
        return view('clientes.eliminar', compact('clientes'));
    }

    
        
    



}
