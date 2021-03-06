@extends('desing.tablas')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Eliminar Creditos 
        <small>Aqui puedes eliminar los creditos</small>

      </h1>
      <br>

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
                  <th>Fecha Credito</th>
                  <th>Total</th>
                  <th>Credito</th>
                  
                  
                  
                </tr>
                </thead>
                <tbody>
                @foreach($clicres as $clicre)
              
                <tr>
                  <td>{{ $clicre->nombres }} {{ $clicre->apellidos }}</td>
                  <td>{{ $clicre->fecha }}</td>
                  <td>{{ number_format($clicre->total,0) }}</td>

                  

                  <td>

                  @can ('creditos.destroy')
                  {!! Form::open(['route' => ['creditos.destroy', $clicre->id ],
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
      <a class="btn btn-success btn-flat" href="{{ route('creditos.index') }}"><i class="fa fa-fw fa-mail-reply-all" aria-hidden="true"></i>Volver</a>
      <!-- /.row -->
    </section>



    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->



@endsection