@extends('desing.tablas')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Clientes Eliminar
        <small>Eliminar Cliente</small><td>
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
                  <th>Eliminar</th>
                  
                  
                </tr>
                </thead>
                <tbody>
                @foreach($clientes as $cliente)
              
                <tr>
                <td>{{ $cliente->nombres }} {{ $cliente->apellidos }}</td>
                <td>{{ $cliente->cel_uno }}</td>

                  <td>
                

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