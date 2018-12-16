@extends('desing.tablas')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Permisos
        <small>Permisos definidos en el Sistema</small><td>
           @can ('roles.create')
          <a class="btn btn-warning" href="{{ route('roles.create')}}"><i class="fa fa-fw fa-user-plus" aria-hidden="true"></i>Nuevo Permiso</a>
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
                 
                  <th>Permiso</th>
                  <th>Descripción</th>
                  <th>Opciones</th>
                  
                  
                </tr>
                </thead>
                <tbody>
                @foreach($roles as $role)
              
                <tr>
                  <td>{{ $role->name }}</td>
                  <td>{{ $role->description }}</td>

                  <td>
                  @can ('roles.show')
                  <a class="btn btn-success btn-flat" href="{{ route('roles.show',$role->id)}}"><i class="fa fa-fw fa-pencil-square-o" aria-hidden="true"></i></a>  
                  @endcan
                  @can ('roles.edit')
                  <a class="btn btn-warning btn-flat" href="{{ route('roles.edit',$role->id)}}"><i class="fa fa-fw fa-pencil-square-o" aria-hidden="true"></i></a>    
                  @endcan

                  @can ('roles.destroy')
                  {!! Form::open(['route' => ['roles.destroy', $role->id ],
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