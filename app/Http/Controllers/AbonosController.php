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

        //valor cuota 
        $valorcuota = $creditos->total/$creditos->cuotas;



          

      
        return view('abonos.index', compact('abonos','creditos','clientes','sumacuotas','valorcuota'));

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

        // Utilidad Actual utilidad_act

        $util = $sumaabonos-$capitala;

        $util_act = 0; 

        if ($util<=0)
         {
            $util_act = 0;
         }
         elseif($util>0)
         {
            $util_act = $util; 
          }

        

        // Total debe:  tot_actual
        $tot_actual = Creditos::where('id', '=', $id)->value('total');

        $tota = $tot_actual-$sumaabonos;

        $debe_act = 0; 

        if ($tota<0)
         {
            $debe_act = 0;
         }
         elseif($tota>=0)
         {
            $debe_act = $tota; 
          }



        //actualizo el valor en la tabla creditos 
        $creditoactual = Creditos::find($id);
        $creditoactual->sum_abonos = $sumaabonos;
        $creditoactual->cap_actual = $capitalb;
        $creditoactual->utilidad_act = $util_act;
        $creditoactual->tot_actual = $debe_act;
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
        $sum_abonosa = Creditos::where('id', '=', $id)->value('sum_abonos');
        $abonoactual = Abonos::where('id', '=', $idabono)->value('cuota'); 
        //realizo la suma entre el tot_actual y el abono que se elimina 
        $actualtone = ($sum_abonosa+$abonoactual)-$request->cuota;
        $actualttwo = $actualtone;


        // Actualizar cap_actual

        $capi_tal = Creditos::where('id', '=', $id)->value('capital');
        $capi = ($sum_abonosa-$abonoactual)+$request->cuota;
        $sumanueva = $capi;

    
      
        $cap = 0;

        if ($sumanueva<=$capi_tal)
         {
            $cap = $sumanueva;
         }
         elseif($sumanueva>$capi_tal)
         {
            $cap = $capi_tal; 
          }


        //actualizar campo sum_abonos
        $sumat = $sumanueva;


         // Utilidad Actual utilidad_act

         $util = $sumat-$capi_tal;

         $util_act = 0; 
 
         if ($util<=0)
          {
             $util_act = 0;
          }
          elseif($util>0)
          {
             $util_act = $util; 
           }

         // Total debe:  tot_actual

         $tot_actual = Creditos::where('id', '=', $id)->value('total');

         $tota = $tot_actual-$sumanueva;
 
         $debe_act = 0; 
 
         if ($tota<0)
          {
             $debe_act = 0;
          }
          elseif($tota>=0)
          {
             $debe_act = $tota; 
           }
 
    
       

        //actualizo el valor en la tabla creditos 
        $creditoactual = Creditos::find($id);
        $creditoactual->tot_actual = $debe_act;
        $creditoactual->utilidad_act = $util_act;
        $creditoactual->cap_actual = $cap;
        $creditoactual->sum_abonos = $sumat;
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


          // Utilidad Actual utilidad_act

          $ca= Creditos::where('id', '=', $id)->value('capital');

          $util = $sumabone-$ca;

          $util_act = 0; 
  
          if ($util<=0)
           {
              $util_act = 0;
           }
           elseif($util>0)
           {
              $util_act = $util; 
            }

          
            // Total debe:  tot_actual
        $tot_actual = Creditos::where('id', '=', $id)->value('total');

        $tota = $tot_actual-$sumabone;

        $debe_act = 0; 

        if ($tota<0)
         {
            $debe_act = 0;
         }
         elseif($tota>=0)
         {
            $debe_act = $tota; 
          }

   
        

         //actualizo el valor en la tabla creditos 
         $creditoactual = Creditos::find($id);
         $creditoactual->tot_actual = $debe_act;
         $creditoactual->cap_actual = $capitalc;
         $creditoactual->utilidad_act = $util_act;
         $creditoactual->sum_abonos = $sumabone;
         $creditoactual->save();

        $abonos->delete();
        return back()->with('info','Abono con Eliminado Correctamente'); 
    }



}
