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
    public function cuadredia()
    {

        $now = Carbon::now();
        $formatfecha = $now->toDateString(); 

       // trae los abonos del dia 
        $abonos = DB::table('abonos')
        ->Join('creditos', 'creditos.id' , '=' ,'abonos.creditos_id')
        ->Join('clientes', 'clientes.id' , '=' ,'creditos.clientes_id')
        ->select('abonos.fecha', 'abonos.cuota', 'abonos.usuario', 'creditos.total', 'creditos.sum_abonos', 'clientes.nombres','clientes.apellidos' )
        ->where('abonos.fecha', '=', $formatfecha )
        ->get();
       
        //trae la suma de las cuotas del dia 

        $sumcuota = DB::table('abonos')
        ->Join('creditos', 'creditos.id' , '=' ,'abonos.creditos_id')
        ->select('abonos.fecha', 'abonos.cuota')
        ->where('abonos.fecha', '=', $formatfecha )
        ->sum('abonos.cuota');

        // trae la suma de del total abonado en todos los creditos asociados a las cuotas

        $sumtotcredi = DB::table('abonos')
        ->Join('creditos', 'creditos.id' , '=' ,'abonos.creditos_id')
        ->select('abonos.fecha','creditos.sum_abonos')
        ->where('abonos.fecha', '=', $formatfecha )
        ->sum('creditos.sum_abonos');

        //resta del total de los creditos con abonos del dia
        
        $resabonos = $sumtotcredi-$sumcuota;

        //sumatoria de los capitales de los creditos involucrados 

        $sumtotcapital = DB::table('abonos')
        ->Join('creditos', 'creditos.id' , '=' ,'abonos.creditos_id')
        ->select('abonos.fecha','creditos.sum_abonos')
        ->where('abonos.fecha', '=', $formatfecha )
        ->sum('creditos.capital');

        //obtenemos el capital total de las cuotas del dia

        $capitaldia = $sumtotcapital-$resabonos;

        return view('administracion.cuadredia', compact('abonos','formatfecha','sumcuota','resabonos'));
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
