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


        $abonos = DB::table('abonos')
        ->Join('creditos', 'creditos.id' , '=' ,'abonos.creditos_id')
        ->Join('clientes', 'clientes.id' , '=' ,'creditos.clientes_id')
        ->select('abonos.fecha', 'abonos.cuota', 'abonos.usuario', 'creditos.total', 'clientes.nombres','clientes.apellidos' )
        ->where('abonos.fecha', '=', $formatfecha )
        ->get();

        
        return view('administracion.cuadredia', compact('abonos','formatfecha'));
    }
    













}
