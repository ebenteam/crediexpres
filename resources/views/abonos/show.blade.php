@extends('desing.formularios')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Detalle de Abono
        <small>Informacion detallada del Abono</small>
      </h1>
      		
    </section>

    <section class="content">

    <div class="box box-default">

    <div class="box-header with-border">

<section class="content">


<div class="form-group">
<h4 class="text-blue"><i class="glyphicon glyphicon-user"></i>Fecha: <strong>{{ $abonos->fecha }} </strong> </h4>
</div>

<div class="form-group">
 <h4 class="text-black"><i class="glyphicon glyphicon-home"></i>Cuota:  {{ $abonos->cuota }} </h4>
</div>

<div class="form-group">
 <h4 class="text-blue"><i class="glyphicon glyphicon-equalizer"></i>Tipo de Cuota:  {{ $abonos->tipo_cuota }} </h4>
</div>

<div class="form-group">
 <h4 class="text-blue"><i class="glyphicon glyphicon-equalizer"></i>Usuario Sistema: {{ $abonos->usuario }} </h4>
</div>

@can ('abonos.index')
<a class="btn btn-success btn-flat" href="{{ route('abonos.index',$abonos->creditos_id)}}"><i class="fa fa-fw fa-mail-reply-all" aria-hidden="true"></i>Volver</a>
@endcan


</div>
</div>
</div>

</section>



@endsection