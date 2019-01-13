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

        //se realiza la suma en la columna de una tabla que pertencen a un id
          $sumacuotas = Abonos::where('creditos_id', '=', $id)->count();


          $utilidad = $creditos->sum_abonos-$creditos->capital;

      
        return view('abonos.index', compact('abonos','creditos','clientes','sumacuotas','utilidad'));

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
    public function store(AbonosRequest $request,Creditos $creditos )
    {
        $abonos = Abonos::create($request->all());

        // Lo que debe el Cliente tot_actual

        //obtengo el id del credito por medio del arrego en el request
        $id = $request->creditos_id;
        //obtengo el valor de tot_actual de la tabla creditos con el id del credito
        $tot_actual = Creditos::where('id', '=', $id)->value('tot_actual');
        //realizo la resta entre el tot_actual y el abono, y obtengo lo que debe el cliente
        $actualtotal = $tot_actual-$request->cuota;
        //fin lo que debe el cliente

        // Suma de Todos los abonos sum_abonos
        $sumaabonos = Abonos::where('creditos_id', '=', $id)->sum('cuota');

        // Capital Actual utilidad_act
        $capitala = Creditos::where('id', '=', $id)->value('capital');

        $capactual = $sumaabonos-$capitala;

        $capitalb = 0;
        $totalabonos = $sumaabonos; 

        if ($totalabonos<=$capitala)
         {
            $capitalb = $totalabonos;
         }
         elseif($totalabonos>$capitala)
         {
            $capitalb = $capitala; 
          }
        //actualizo el valor en la tabla creditos 
        $creditoactual = Creditos::find($id);
        $creditoactual->tot_actual = $actualtotal;
        $creditoactual->sum_abonos = $sumaabonos;
        $creditoactual->cap_actual = $capitalb;
        $creditoactual->save();


        
        return redirect()->route('abonos.index', ['id' => $id])
        ->with('info', 'Abono Nuevo creado con éxito');

        

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
    public function update(AbonosRequest $request, Abonos $abonos,Creditos $creditos)
    {
        //obtengo el id del credito por medio del arreglo en el request
        $id = $request->creditos_id;
        $idabono = $abonos->id;
        //obtengo el valor de tot_actual de la tabla creditos con el id del credito
        $tot_actual = Creditos::where('id', '=', $id)->value('tot_actual');
        $abonoactual = Abonos::where('id', '=', $idabono)->value('cuota'); 
        //realizo la suma entre el tot_actual y el abono que se elimina 
        $actualtone = ($tot_actual+$abonoactual)-$request->cuota;
        $actualttwo = $actualtone;



        //actualizo el valor en la tabla creditos 
        $creditoactual = Creditos::find($id);
        $creditoactual->tot_actual = $actualttwo;
        $creditoactual->save();

        $abonos->update($request->all());

        
       return redirect()->route('abonos.index',['id' => $id])
       ->with('info', 'Abono Modificado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Abonos  $abonos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Abonos $abonos,Creditos $creditos )
    {
        //obtengo el id del credito por medio del arrego en el request
        $id = $abonos->creditos_id;
        //obtengo el valor de tot_actual de la tabla creditos con el id del credito
        $tot_actual = Creditos::where('id', '=', $id)->value('tot_actual');
        //realizo la suma entre el tot_actual y el abono que se elimina 
        $actualtotal = $tot_actual+$abonos->cuota;
       
       
        //eliminar valor de cap_actual
        $capilimina = Creditos::where('id', '=', $id)->value('cap_actual');
        $cuotaelimina = $abonos->cuota;

        $sumaabonos = Abonos::where('creditos_id', '=', $id)->sum('cuota');
        $nuevocuotas = $sumaabonos-$cuotaelimina; 
        $capitalc = 0;

        if ($nuevocuotas<=$capilimina)
         {
            $capitalc = $nuevocuotas;
         }
         elseif($nuevocuotas>$capilimina)
         {
            $capitalc = $capilimina; 
          }

        //actualizar campo sum_abonos
        $sumabone = $nuevocuotas;
        

         //actualizo el valor en la tabla creditos 
         $creditoactual = Creditos::find($id);
         $creditoactual->tot_actual = $actualtotal;
         $creditoactual->cap_actual = $capitalc;
         $creditoactual->sum_abonos = $sumabone;
         $creditoactual->save();

        $abonos->delete();
        return back()->with('info','Abono con Eliminado Correctamente'); 
    }



}
