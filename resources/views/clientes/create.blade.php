@extends('desing.formularios')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Crear Nuevo Cliente
        <small>Ingresa los datos del cliente</small>
      </h1>
      		
    </section>

    <section class="content">

    <div class="box box-default">

    <div class="box-header with-border">

<section class="content">

{!! Form::open([ 'route' => 'clientes.store' ]) !!}

@include('clientes.partials.form')

{!! Form::close() !!}
</div>
</div>
</div>

</section>



@endsection