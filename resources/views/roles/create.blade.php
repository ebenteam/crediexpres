@extends('desing.formularios')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Crear Nuevo Permiso
        <small>Aqui puedes definir los permisos</small>
      </h1>
      		
    </section>

    <section class="content">

    <div class="box box-default">

    <div class="box-header with-border">

<section class="content">

{!! Form::open([ 'route' => 'roles.store' ]) !!}

@include('roles.partials.form')

{!! Form::close() !!}
</div>
</div>
</div>

</section>



@endsection