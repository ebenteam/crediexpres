@extends('desing.formularios')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Crear Nuevo Abono
        <small>Ingresa los datos del Abono</small>
      </h1>
      		
    </section>

    <section class="content">

    <div class="box box-default">

    <div class="box-header with-border">

<section class="content">

{!! Form::open([ 'route' => 'abonos.store']) !!}

@include('abonos.partials.form')

@can ('abonos.index')
<a class="btn btn-success btn-flat" href="{{ route('abonos.index',$creditos->id)}}"><i class="fa fa-fw fa-mail-reply-all" aria-hidden="true"></i>Volver</a>
@endcan

{!! Form::close() !!}
</div>
</div>
</div>

</section>






@endsection