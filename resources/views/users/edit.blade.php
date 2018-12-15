@extends('desing.formularios')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Asignar Perfil de Empleado
        <small>Puedes asignar el perfil de tu empleado</small>
      </h1>
      		
    </section>

    <section class="content">

    <div class="box box-default">

    <div class="box-header with-border">

<section class="content">

{!! Form::model($users,['route'=> ['users.update', $users->id],
'method' => 'PUT']) !!}

@include('users.partials.form')

{!! Form::close() !!}
</div>
</div>
</div>

</section>



@endsection