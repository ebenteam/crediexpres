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

        $abonos = DB::table('abonos')
        ->Join('creditos', 'creditos.id' , '=' ,'abonos.creditos_id')
        ->Join('clientes', 'clientes.id' , '=' ,'creditos.clientes_id')
        ->select('abonos.fecha', 'abonos.cuota', 'abonos.usuario', 'creditos.tot_actual', 'clientes.nombres' )
        ->get();

        
        return view('administracion.cuadredia', compact('abonos'));
    }
    













}
