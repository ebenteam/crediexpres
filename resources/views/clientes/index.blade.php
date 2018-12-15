@extends('desing.tablas')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Clientes
        <small>Aqui pudes Ingresar Nuevos Clientes</small><td>
           @can ('clientes.create')
          <a class="btn btn-warning" href="{{ route('clientes.create')}}"><i class="fa fa-fw fa-user-plus" aria-hidden="true"></i>Nuevo Cliente</a>
          @endcan
          </td>
      </h1>
      @if (session('info'))
      <div class="alert alert-success alert-dismissible">
             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
             <h4><i class="icon fa fa-check"></i> Correcto!</h4>
             <strong>{{ session('info') }}</strong>
           </div>
      @endif
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                 
                  <th>Nombres</th>
                  <th>Apellidos</th>
                  <th>Opciones</th>
                  
                  
                </tr>
                </thead>
                <tbody>
                @foreach($clientes as $cliente)
              
                <tr>
                  <td>{{ $cliente->nombres }}</td>
                  <td>{{ $cliente->apellidos }}</td>

                  <td>
                  @can ('clientes.show')
                  <a class="btn btn-success btn-flat" href="{{ route('clientes.show',$cliente->id)}}"><i class="fa fa-fw fa-pencil-square-o" aria-hidden="true"></i></a>  
                  @endcan
                  @can ('clientes.edit')
                  <a class="btn btn-warning btn-flat" href="{{ route('clientes.edit',$cliente->id)}}"><i class="fa fa-fw fa-pencil-square-o" aria-hidden="true"></i></a>    
                  @endcan

                  @can ('clientes.destroy')
                  {!! Form::open(['route' => ['clientes.destroy', $cliente->id ],
                  'method' => 'DELETE']) !!} 
                  <button class="btn btn-danger btn-flat"><i class="fa fa-fw fa-pencil-square-o" aria-hidden="true"></i></button>
                   {!! Form::close() !!}    
                  @endcan
                  
                  </td>
                  
                </tr>

                @endforeach
               </tbody>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->



@endsection