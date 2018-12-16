@extends('desing.formularios')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Modificar Permisos
        <small>Modificar los permisos de empleado</small>
      </h1>
      		
    </section>

    <section class="content">

    <div class="box box-default">

    <div class="box-header with-border">

<section class="content">


{!! Form::model($role,['route'=> ['roles.update', $role->id],
'method' => 'PUT']) !!}

@include('roles.partials.form')

{!! Form::close() !!}

</div>
</div>
</div>

</section>



@endsection