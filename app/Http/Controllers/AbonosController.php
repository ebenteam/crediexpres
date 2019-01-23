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

        // Suma de Todos los abonos normales 
        $sumnormal = Abonos::where('creditos_id', '=', $id)->where('tipo_cuota', '=', 1)->sum('cuota');
        // Suma de Todos los abonos interes
        $suminter = Abonos::where('creditos_id', '=', $id)->where('tipo_cuota', '=', 2)->sum('cuota');


        // Capital Actual utilidad_act
        $capitala = Creditos::where('id', '=', $id)->value('capital');

        $capactual = $capitala-$sumnormal;

        $capitalb = 0;
        $totalabonos = $sumnormal; 

        if ($capactual>0)
         {
            $capitalb = $capactual;
         }
         elseif($capactual<=0)
         {
            $capitalb = 0; 
          }

        // Utilidad Actual utilidad_act

        $util = $sumnormal-$capitala;

        $util_act = 0; 

        if ($util<=0)
         {
            $util_act = 0;
         }
         elseif($util>0)
         {
            $util_act = $util; 
          }

          // sumo a utilidad de forma directa abonos a utilidad 

          $utilabo = $util_act + $suminter;

           // sumo a total sum_abonos

           //suma total normal y interes

           $sumnyi = $sumnormal + $suminter;



        

        // Total debe:  tot_actual
        $tot_actual = Creditos::where('id', '=', $id)->value('total');

        $tota = $tot_actual-$sumnormal;

        $debe_act = 0; 

        if ($tota<0)
         {
            $debe_act = 0;
         }
         elseif($tota>=0)
         {
            $debe_act = $tota; 
          }

          //resto a tot_actual las cuotas de solo interes (pendiente)

          $totactual = $debe_act - $suminter;



        //actualizo el valor en la tabla creditos 
        $creditoactual = Creditos::find($id);
        $creditoactual->sum_abonos = $sumnyi;
        $creditoactual->cap_actual = $capitalb;
        $creditoactual->utilidad_act = $utilabo;
        $creditoactual->tot_actual = $totactual;
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
      $id = $request->creditos_id;
      $idabono = $abonos->id;

      $eliminar = Abonos::where('id', '=', $idabono)->delete(); 

      $abonos = Abonos::create($request->all());

      // Lo que debe el Cliente tot_actual

      //obtengo el id del credito por medio del arrego en el request
      $id = $request->creditos_id;

      // Suma de Todos los abonos normales 
      $sumnormal = Abonos::where('creditos_id', '=', $id)->where('tipo_cuota', '=', 1)->sum('cuota');
      // Suma de Todos los abonos interes
      $suminter = Abonos::where('creditos_id', '=', $id)->where('tipo_cuota', '=', 2)->sum('cuota');


      // Capital Actual utilidad_act
      $capitala = Creditos::where('id', '=', $id)->value('capital');

      $capactual = $capitala-$sumnormal;

      $capitalb = 0;
      $totalabonos = $sumnormal; 

      if ($capactual>0)
       {
          $capitalb = $capactual;
       }
       elseif($capactual<=0)
       {
          $capitalb = 0; 
        }

      // Utilidad Actual utilidad_act

      $util = $sumnormal-$capitala;

      $util_act = 0; 

      if ($util<=0)
       {
          $util_act = 0;
       }
       elseif($util>0)
       {
          $util_act = $util; 
        }

        // sumo a utilidad de forma directa abonos a utilidad 

        $utilabo = $util_act + $suminter;

         // sumo a total sum_abonos

         //suma total normal y interes

         $sumnyi = $sumnormal + $suminter;



      

      // Total debe:  tot_actual
      $tot_actual = Creditos::where('id', '=', $id)->value('total');

      $tota = $tot_actual-$sumnormal;

      $debe_act = 0; 

      if ($tota<0)
       {
          $debe_act = 0;
       }
       elseif($tota>=0)
       {
          $debe_act = $tota; 
        }

        //resto a tot_actual las cuotas de solo interes (pendiente)

        $totactual = $debe_act - $suminter;



      //actualizo el valor en la tabla creditos 
      $creditoactual = Creditos::find($id);
      $creditoactual->sum_abonos = $sumnyi;
      $creditoactual->cap_actual = $capitalb;
      $creditoactual->utilidad_act = $utilabo;
      $creditoactual->tot_actual = $totactual;
      $creditoactual->save();

      
      return redirect()->route('abonos.index', ['id' => $id])
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
        $abonos->delete();

        $id = $abonos->creditos_id;

        // Suma de Todos los abonos normales 
        $sumnormal = Abonos::where('creditos_id', '=', $id)->where('tipo_cuota', '=', 1)->sum('cuota');
        // Suma de Todos los abonos interes
        $suminter = Abonos::where('creditos_id', '=', $id)->where('tipo_cuota', '=', 2)->sum('cuota');
  
  
        // Capital Actual utilidad_act
        $capitala = Creditos::where('id', '=', $id)->value('capital');
  
        $capactual = $capitala-$sumnormal;
  
        $capitalb = 0;
        $totalabonos = $sumnormal; 
  
        if ($capactual>0)
         {
            $capitalb = $capactual;
         }
         elseif($capactual<=0)
         {
            $capitalb = 0; 
          }
  
        // Utilidad Actual utilidad_act
  
        $util = $sumnormal-$capitala;
  
        $util_act = 0; 
  
        if ($util<=0)
         {
            $util_act = 0;
         }
         elseif($util>0)
         {
            $util_act = $util; 
          }
  
          // sumo a utilidad de forma directa abonos a utilidad 
  
          $utilabo = $util_act + $suminter;
  
           // sumo a total sum_abonos
  
           //suma total normal y interes
  
           $sumnyi = $sumnormal + $suminter;
  
  
  
        
  
        // Total debe:  tot_actual
        $tot_actual = Creditos::where('id', '=', $id)->value('total');
  
        $tota = $tot_actual-$sumnormal;
  
        $debe_act = 0; 
  
        if ($tota<0)
         {
            $debe_act = 0;
         }
         elseif($tota>=0)
         {
            $debe_act = $tota; 
          }
  
          //resto a tot_actual las cuotas de solo interes (pendiente)
  
          $totactual = $debe_act - $suminter;
  
  
  
        //actualizo el valor en la tabla creditos 
        $creditoactual = Creditos::find($id);
        $creditoactual->sum_abonos = $sumnyi;
        $creditoactual->cap_actual = $capitalb;
        $creditoactual->utilidad_act = $utilabo;
        $creditoactual->tot_actual = $totactual;
        $creditoactual->save();
  
        
        return redirect()->route('abonos.index', ['id' => $id])
        ->with('info', 'Abono Eliminado con éxito');

      }
        



}
