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
          <li><a href="#"><strong>Dir Trabajo:  </strong>{{ $clientes->dir_trabajo }}</a></li>
          <li><a href="#"><strong>Celular:  </strong>{{ $clientes->cel_uno }}</a></li>
          <li><a href="#"><strong>Cel Adicional:  </strong>{{ $clientes->cel_dos }}</a></li>
        </ul>
      </div>
    </div>
    <!-- /.widget-user -->
  </div>
  <!-- /.col -->
  <div class="col-md-4">
    <!-- Widget: user widget style 1 -->
    <div class="box box-widget widget-user-2">
      <!-- Add the bg color to the header using any of the bg-* classes -->
      <div class="widget-user-header bg-aqua-active">
      <div class="widget-user-image">
          <img class="img-circle" src="../dist/img/user5-128x128.jpg" alt="User Avatar">
        </div>
        <h3 class="widget-user-username">Menu de Opciones</h3>
        <h5 class="widget-user-desc">Operaciones con el cliente</h5>
      </div>
      <div class="box-footer no-padding">
        <ul class="nav">
          @can ('creditos.index')
          <li><a class="btn btn-success btn-flat" href="{{ route('creditos.index',$clientes->id)}}">Consultar Creditos<i class="fa fa-fw fa-pencil-square-o" aria-hidden="true"></i></a></li>
          @endcan
          @can ('creditos.create')
          <li><a class="btn btn-block btn-primary" href="{{ route('creditos.create',$clientes->id)}}">Crear Credito<i class="fa fa-fw fa-pencil-square-o" aria-hidden="true"></i></a></li>
          @endcan
          @can ('clientes.edit')
          <li><a class="btn btn-warning btn-flat" href="{{ route('clientes.edit',$clientes->id)}}">Modificar Cliente<i class="fa fa-fw fa-pencil-square-o" aria-hidden="true"></i></a></li>
          @endcan
          @can ('clientes.edit')
          <li><a class="btn btn-danger btn-flat" href="{{ route('clientes.edit',$clientes->id)}}">Eliminar Cliente<i class="fa fa-fw fa-pencil-square-o" aria-hidden="true"></i></a></li>
          @endcan
        </ul>
      </div>
            <!-- /.description-block -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
    </div>
    <!-- /.widget-user -->
  </div>
  <!-- /.col -->
 
  <!-- /.col -->
</div>
<!-- /.row -->


</div>
</div>
</div>


</section>





@endsection
                 


               