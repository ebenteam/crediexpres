@extends('desing.tablas')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Clientes
        <small>Aqui pudes Ingresar Nuevos Clientes</small><td>
           @can ('clientes.index')
          <button type="button" onclick="location.href='{{ route('clientes.index') }}'" class="btn bg-navy margin"><i class="fa fa-fw fa-user-plus" aria-hidden="true"></i>Nuevo Cliente</button>
          @endcan
          </td>
      </h1>
      @if (session('successMsg'))
      <div class="alert alert-success alert-dismissible">
             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
             <h4><i class="icon fa fa-check"></i> Correcto!</h4>
             <strong>{{ session('successMsg') }}</strong>
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
                  <th>Celular</th>
                  
                </tr>
                </thead>
                <tbody>
                @foreach($clientes as $cliente)
              
                <tr>
                  <td>{{ $cliente->nombres }}</td>
                  <td>{{ $cliente->apellidos }}</td>
                  <td>{{ $cliente->cel_uno }}</td>
                  
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