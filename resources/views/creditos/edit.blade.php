@extends('desing.formularios')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Modificar Datos Cliente
        <small>Modificar los datos del cliente</small>
      </h1>
      		
    </section>

    <section class="content">

    <div class="box box-default">

    <div class="box-header with-border">

<section class="content">

{!! Form::model($creditos,['route'=> ['creditos.update', $creditos->id],
'method' => 'PUT']) !!}

@include('creditos.partials.formedit')

@can ('creditos.show')
<a class="btn btn-success btn-flat" href="{{ route('creditos.show',$creditos->clientes_id)}}"><i class="fa fa-fw fa-mail-reply-all" aria-hidden="true"></i>Volver</a>
@endcan

</div>

{!! Form::close() !!}



</div>
</div>
</div>

</section>



@endsection