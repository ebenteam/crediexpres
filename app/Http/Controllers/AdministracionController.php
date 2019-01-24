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

        //suma de intereses cuotas interes 

        $abonosinter = DB::table('abonos')
        ->Join('creditos', 'creditos.id' , '=' ,'abonos.creditos_id')
        ->select('abonos.fecha', 'abonos.cuota')
        ->where('abonos.tipo_cuota', '=', 2 )
        ->where('abonos.fecha', '=', $newfecha )
        ->sum('abonos.cuota');


        
 

        //variable para tipo de cuota 
        $tipcuota= 0; 

            

        return view('administracion.cuadredia', compact('abonos','formatfecha','sumcuota','sumtotcredi','tipcuota','abonosinter'));
    }


 
    public function cuentatotal()
    {
        return view('administracion.cuentatotal', compact('clientes'));
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
