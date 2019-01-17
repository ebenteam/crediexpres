@extends('desing.tablas')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Crear Credito al Cliente
        <small>Puedes crear creditos a los clientes</small><td>
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
                  <th>Celular</th>
                  <th>Crear</th>
                  
                  
                </tr>
                </thead>
                <tbody>
                @foreach($clientes as $cliente)
              
                <tr>
                <td>{{ $cliente->nombres }} {{ $cliente->apellidos }}</td>
                  <td>{{ $cliente->cel_uno }}</td>

                  <td>
                

                  @can ('creditos.create')
                  <a class="btn btn-success btn-flat" href="{{ route('creditos.create',$cliente->id)}}"><i class="fa fa-fw fa-pencil-square-o" aria-hidden="true"></i></a>
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