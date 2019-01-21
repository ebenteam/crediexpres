<?php

namespace App\Http\Controllers;

use App\Creditos;
use App\Clientes;
use App\Abonos;
use Carbon\Carbon;
use DB;



use App\Http\Requests\CreditosRequest;

use Illuminate\Http\Request;

class CreditosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // trae los abonos del dia 
       $clicres = DB::table('creditos')
       ->Join('clientes', 'clientes.id', '=' ,'creditos.clientes_id')
       ->select('clientes.nombres', 'clientes.apellidos', 'creditos.fecha', 'creditos.total', 'creditos.id')
       ->get();


       return view('creditos.index', compact('clicres'));

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function modificar()
    {
       // trae los abonos del dia 
       $clicres = DB::table('creditos')
       ->Join('clientes', 'clientes.id', '=' ,'creditos.clientes_id')
       ->select('clientes.nombres', 'clientes.apellidos', 'creditos.fecha', 'creditos.total', 'creditos.id')
       ->get();


       return view('creditos.modificar', compact('clicres'));

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function eliminar()
    {
       // trae los abonos del dia 
       $clicres = DB::table('creditos')
       ->Join('clientes', 'clientes.id', '=' ,'creditos.clientes_id')
       ->select('clientes.nombres', 'clientes.apellidos', 'creditos.fecha', 'creditos.total', 'creditos.id')
       ->get();


       return view('creditos.eliminar', compact('clicres'));

    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear()
    {
        $clientes = Clientes::all();
        return view('creditos.crear', compact('clientes'));

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
      //Ecuaciones para obtener datos

      // calculo del interes  

      $interes = ($request->capital * $request->interes)/100;

      // campo total utilidad con plazo

      $utilidad = ($interes/30) * $request->plazo;

      //total capital mas interes 

      $totalglobal = $request->capital + $utilidad;
     

        $creditos = new Creditos;
        $creditos->fecha = $request->input('fecha');
        $creditos->capital = $request->input('capital');
        $creditos->interes = $request->input('interes');
        $creditos->total = $totalglobal;
        $creditos->cuotas = $request->input('cuotas');
        $creditos->plazo = $request->input('plazo');
        $creditos->fre_pago = $request->input('fre_pago');
        $creditos->cap_actual = $request->input('capital');
        $creditos->int_actual = $utilidad;
        $creditos->tot_actual = $totalglobal;
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
 //Ecuaciones para obtener datos

      // calculo del interes  

      $interes = ($request->capital * $request->interes)/100;

      // campo total utilidad con plazo

      $utilidad = ($interes/30) * $request->plazo;

      //total capital mas interes 

      $totalglobal = $request->capital + $utilidad;

      //Actualizar campo capital actual 




      // Suma de Todos los abonos sum_abonos
      $idc = $creditos->id; 
      $sumaabonos = Abonos::where('creditos_id', '=', $idc)->sum('cuota');

      $totaltt = $totalglobal-$sumaabonos;
 

      // Capital cap_actual

     // obtengo el capital de los datos nuevos 
      $capitala = $request->capital; 

      $capactual = $capitala-$sumaabonos;

      $capitalb = 0;

      if ($capactual>0)
       {
          $capitalb = $capactual;
       }
       elseif($capactual<=0)
       {
          $capitalb = 0; 
        }

      // fin cap_actual

      // Capital utilidad_act

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



        $creditos = Creditos::find($creditos->id);
        $creditos->fecha = $request->input('fecha');
        $creditos->capital = $request->input('capital');
        $creditos->interes = $request->input('interes');
        $creditos->int_actual = $utilidad;
        $creditos->total = $totalglobal;
        $creditos->cuotas = $request->input('cuotas');
        $creditos->plazo = $request->input('plazo');
        $creditos->fre_pago = $request->input('fre_pago');
        $creditos->cap_actual = $capitalb;
        $creditos->utilidad_act = $util_act;
        $creditos->tot_actual = $totaltt;
        $creditos->cuo_actual = $request->input('cuotas');
        $creditos->clientes_id = $request->input('clientes_id');
        $creditos->save();

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
