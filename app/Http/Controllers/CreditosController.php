<?php

namespace App\Http\Controllers;

use App\Creditos;
use App\Clientes;
use Carbon\Carbon;





use Illuminate\Http\Request;

class CreditosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $creditos = Creditos::where('clientes_id', '=', $id)->paginate();
        $clientes = Clientes::find($id);

        return view('creditos.index', compact('creditos','clientes'));

    }

    /**
     * Muestra el formulario para crear credito viene de show.blade.clientes.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {

        $now = Carbon::now();
        $clientes = Clientes::find($id);
        return view('creditos.create', compact('clientes', 'now'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $creditos = Creditos::create($request->all());
        $id = $request->clientes_id; 
    
        return redirect()->route('creditos.index', ['id' => $id])
        ->with('info', 'Credito Nuevo creado con éxito');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Creditos  $clientes
     * @return \Illuminate\Http\Response
     */
    public function show(Creditos $creditos)
    {
        return view('creditos.show', compact('creditos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Creditos  $clientes
     * @return \Illuminate\Http\Response
     */
    public function edit(Creditos $creditos)
    {
        return view('creditos.edit', compact('creditos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Creditos  $clientes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Creditos $creditos)
    {
       $creditos->update($request->all());

       return redirect()->route('creditos.index')
       ->with('info', 'Credito Modificado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Creditos  $creditos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Creditos $creditos)
    {
        $creditos->delete();

        return back()->with('info','Eliminado correctamente'); 
    }



}
