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

<div class="row">
  <div class="col-md-4">
    <!-- Widget: user widget style 1 -->
    <div class="box box-widget widget-user-2">
      <!-- Add the bg color to the header using any of the bg-* classes -->
      <div class="widget-user-header bg-yellow">
        <div class="widget-user-image">
          <img class="img-circle" src="../dist/img/user7-128x128.jpg" alt="User Avatar">
        </div>
        <!-- /.widget-user-image -->
        <h3 class="widget-user-username">{{ $clientes->nombres }} {{ $clientes->apellidos }}</h3>
        <h5 class="widget-user-desc">Codigo: {{ $clientes->id }} </h5>
      </div>
      <div class="box-footer no-padding">
        <ul class="nav nav-stacked">
          <li><a href="#"><strong>Dirección: </strong>{{ $clientes->dir_casa }}</a></li>
          <li><a href="#"><strong>Dirección Trabajo:  </strong>{{ $clientes->dir_trabajo }}</a></li>
          <li><a href="#"><strong>Celular:  </strong>{{ $clientes->cel_uno }}</a></li>
          <li><a href="#"><strong>Cel Adicional:  </strong>{{ $clientes->cel_dos }}</a></li>
          <li><a href="#"><strong>Fecha de Creación:  </strong>{{ $clientes->created_at }}</a></li>
        </ul>
      </div>
    </div>
    @can ('clientes.ver')
      <a class="btn btn-success btn-flat" href="{{ route('clientes.ver')}}"><i class="fa fa-fw fa-mail-reply-all" aria-hidden="true"></i>Volver</a>
      @endcan
  
  </div>
 

 
 
  <!-- /.col -->
</div>
<!-- /.row -->


</div>
</div>
</div>


</section>





@endsection
                 


               