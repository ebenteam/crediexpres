<?php

namespace App\Http\Controllers;

use App\Abonos;
use App\Creditos;
use App\Clientes;
use Carbon\Carbon;
use DB;

use Illuminate\Http\Request;

class AdministracionController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cuadredia(Request $request)
    {
        $newfecha = $request->fecha;
        $now = Carbon::now();
        $formatfecha = $newfecha;

       // trae los abonos del dia 
        $abonos = DB::table('abonos')
        ->Join('creditos', 'creditos.id' , '=' ,'abonos.creditos_id')
        ->Join('clientes', 'clientes.id' , '=' ,'creditos.clientes_id')
        ->select('abonos.fecha', 'abonos.cuota', 'abonos.usuario', 'abonos.tipo_cuota', 'creditos.id','creditos.total', 'creditos.sum_abonos', 'clientes.nombres','clientes.apellidos' )
        ->where('abonos.fecha', '=', $newfecha )
        ->get();

       
        //trae la suma de las cuotas del dia 

        $sumcuota = DB::table('abonos')
        ->Join('creditos', 'creditos.id' , '=' ,'abonos.creditos_id')
        ->select('abonos.fecha', 'abonos.cuota')
        ->where('abonos.fecha', '=', $newfecha )
        ->sum('abonos.cuota');

        // trae la suma de del total abonado en todos los creditos asociados a las cuotas

        $sumtotcredi = DB::table('abonos')
        ->Join('creditos', 'creditos.id' , '=' ,'abonos.creditos_id')
        ->select('abonos.fecha','creditos.sum_abonos')
        ->where('abonos.fecha', '=', $newfecha )
        ->sum('creditos.sum_abonos');

        //suma de cuotas normales 

        $abonosnormal = DB::table('abonos')
        ->Join('creditos', 'creditos.id' , '=' ,'abonos.creditos_id')
        ->select('abonos.fecha', 'abonos.cuota')
        ->where('abonos.tipo_cuota', '=', 1 )
        ->where('abonos.fecha', '=', $newfecha )
        ->sum('abonos.cuota');


        //suma de intereses cuotas interes 

        $abonosinter = DB::table('abonos')
        ->Join('creditos', 'creditos.id' , '=' ,'abonos.creditos_id')
        ->select('abonos.fecha', 'abonos.cuota')
        ->where('abonos.tipo_cuota', '=', 2 )
        ->where('abonos.fecha', '=', $newfecha )
        ->sum('abonos.cuota');

        //Obtencion de Capital y Interes Real 

        //1) Una consulta que me seleccione los id de los abonos del dia

 

        //variable para tipo de cuota 
        $tipcuota= 0; 

            

        return view('administracion.cuadredia', compact('abonos','formatfecha','sumcuota','sumtotcredi','abonosnormal','abonosinter'));
    }


 
    public function cuentatotal()
    {

        
        $date = Carbon::now();
        $date = $date->format('d-m-Y');

       // Info de creditos

       //capital
        $totalcap = DB::table('creditos')->sum('capital');
       //interes
        $totalint = DB::table('creditos')->sum('int_actual');
       //capital + interes
        $capinter = $totalcap + $totalint;
      //numero de creditos
        $numcre = DB::table('creditos')->count();

        // Info actual 

        //capital actual 
        $capact = DB::table('creditos')->sum('cap_actual');
        //interes Utilidad generada 
        $utiact = DB::table('creditos')->sum('utilidad_act');
        //Total de Abonos 
        $sumabon = DB::table('creditos')->sum('sum_abonos');

        //Ganancia futura 
        // 1) suma de abonos a interes 
        $sumai = DB::table('abonos')->where('tipo_cuota','=', 2)->sum('cuota'); 
       // 2) interes ingresado y resto los abonos a interes
        $intres = $utiact-$sumai; 
       // 3) resto el interes total y el interes abonado pero sin el abono a interes
        $futuro = $totalint-$intres; 

       
        return view('administracion.cuentatotal', compact('date','totalcap','totalint','capinter','numcre','capact','utiact','sumabon','futuro','fecha') );
    }


    public function gastos()
    {
        return view('administracion.gastos', compact('clientes'));
    }

    public function listacobros()
    {
        return view('administracion.listacobros', compact('clientes'));
    }
    
    













}
