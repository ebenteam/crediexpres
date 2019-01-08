<?php

namespace App\Http\Controllers;

use App\Abonos;
use App\Creditos;
use App\Clientes;
use Carbon\Carbon;
use App\Http\Requests\AbonosRequest;


use Illuminate\Http\Request;

class AbonosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $abonos = Abonos::where('creditos_id', '=', $id)->get();
        $creditos = Creditos::find($id);
        /**
        * se realiza consulta donde se compara el id que llega con el id de creditos 
        * y selecciono el valor que esta columna clientes_id se asigna a la variable idclientes
        * despues hacemos la consulta del cliente con find y entregamos la variable idcliente de creditos
        **/
        $idcliente = Creditos::where('id', '=', $id)->value('clientes_id');
        $clientes = Clientes::find($idcliente);
      
        return view('abonos.index', compact('abonos','creditos','clientes'));

    }

    /**
     * Muestra el formulario para crear credito viene de show.blade.clientes.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {

        $now = Carbon::now();
        $creditos = Creditos::find($id);
        return view('abonos.create', compact('creditos', 'now'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AbonosRequest $request)
    {
        $abonos = Abonos::create($request->all());
        $id = $request->creditos_id; 
    
        return redirect()->route('abonos.index', ['id' => $id])
        ->with('info', 'Credito Nuevo creado con éxito');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Abonos  $creditos
     * @return \Illuminate\Http\Response
     */
    public function show(Abonos $abonos)
    {
        return view('abonos.show', compact('abonos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Abonos  $creditos
     * @return \Illuminate\Http\Response
     */
    public function edit(Abonos $abonos)
    {
        return view('abonos.edit', compact('abonos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Abonos  $creditos
     * @return \Illuminate\Http\Response
     */
    public function update(AbonosRequest $request, Abonos $abonos)
    {
       $abonos->update($request->all());
       $id = $request->creditos_id; 


       return redirect()->route('abonos.index',['id' => $id])
       ->with('info', 'Abono Modificado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Abonos  $abonos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Abonos $abonos)
    {
        $abonos->delete();
       
        return back()->with('info','Abono con Eliminado Correctamente'); 
    }



}
