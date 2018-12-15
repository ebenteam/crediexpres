@extends('desing.tablas')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <h1>
        Usuarios del Sistema
        <small>Aqui puedes visualizar los Usuarios del Sistema</small>
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
                 
                  <th>Nombre</th>
                  <th>Email</th>
                  <th>Opciones</th>
                  
                  
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
              
                <tr>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->email }}</td>

                  <td>
                  @can ('users.show')
                  <a class="btn btn-success btn-flat" href="{{ route('users.show',$user->id)}}"><i class="fa fa-fw fa-pencil-square-o" aria-hidden="true"></i></a>  
                  @endcan
                  @can ('users.edit')
                  <a class="btn btn-warning btn-flat" href="{{ route('users.edit',$user->id)}}"><i class="fa fa-fw fa-pencil-square-o" aria-hidden="true"></i></a>    
                  @endcan

                  @can ('users.destroy')
                  {!! Form::open(['route' => ['users.destroy', $user->id ],
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