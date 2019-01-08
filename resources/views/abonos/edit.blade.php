@extends('desing.formularios')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Modificar Abono Cliente
        <small>Modificar Abono del cliente</small>
      </h1>
      		
    </section>

    <section class="content">

    <div class="box box-default">

    <div class="box-header with-border">

<section class="content">

{!! Form::model($abonos,['route'=> ['abonos.update', $abonos->id],
'method' => 'PUT']) !!}

@include('abonos.partials.formedit')

@can ('abonos.index')
<a class="btn btn-success btn-flat" href="{{ route('abonos.index',$abonos->creditos_id)}}"><i class="fa fa-fw fa-mail-reply-all" aria-hidden="true"></i>Volver</a>
@endcan

</div>

{!! Form::close() !!}



</div>
</div>
</div>

</section>



@endsection