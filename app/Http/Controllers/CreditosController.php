<?php

namespace App\Http\Controllers;

use App\Creditos;
use App\Clientes;
use Carbon\Carbon;



use App\Http\Requests\CreditosRequest;

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
        $creditos = Creditos::where('clientes_id', '=', $id)->get();
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
    public function store(CreditosRequest $request)
    {
        

        $creditos = new Creditos;
        $creditos->fecha = $request->input('fecha');
        $creditos->capital = $request->input('capital');
        $creditos->interes = $request->input('interes');
        $creditos->total = $request->input('total');
        $creditos->cuotas = $request->input('cuotas');
        $creditos->plazo = $request->input('plazo');
        $creditos->fre_pago = $request->input('fre_pago');
        $creditos->cap_actual = $request->input('capital');
        $creditos->int_actual = $request->input('interes');
        $creditos->tot_actual = $request->input('total');
        $creditos->cuo_actual = $request->input('cuotas');
        $creditos->clientes_id = $request->input('clientes_id');
        $creditos->save();

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
       $id = $request->clientes_id; 


       return redirect()->route('creditos.index',['id' => $id])
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

        return back()->with('info','Credito Eliminado Correctamente'); 
    }



}
