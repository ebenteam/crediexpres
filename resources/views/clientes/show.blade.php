@extends('desing.formularios')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Detalle Cliente
        <small>Informacion detallada del cliente</small>
      </h1>
      		
    </section>

    <section class="content">

    <div class="box box-default">

    <div class="box-header with-border">

<section class="content">

<div class="form-group">
<h4 class="text-blue"><i class="glyphicon glyphicon-user"></i> <strong>{{ $clientes->nombres }} {{ $clientes->apellidos }}</strong> </h4>
</div>

<div class="form-group">
 <h4 class="text-black"><i class="glyphicon glyphicon-home"></i> {{ $clientes->dir_casa }} </h4>
</div>

<div class="form-group">
 <h4 class="text-blue"><i class="glyphicon glyphicon-equalizer"></i> {{ $clientes->dir_trabajo }} </h4>
</div>

<div class="form-group">
 <h4 class="text-black"><i class="glyphicon glyphicon-phone-alt"></i> {{ $clientes->cel_uno }} </h4>
</div>

<div class="form-group">
 <h4 class="text-blue"><i class="glyphicon glyphicon-earphone"></i> {{ $clientes->cel_dos }} </h4>
</div>

</div>
</div>
</div>

</section>



@endsection
                 


               