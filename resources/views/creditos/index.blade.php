@extends('desing.tablas')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Creditos
        <small>Aqui puedes consultar Creditos</small>
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
                 
                  <th>Fecha</th>
                  <th>Total</th>
                  <th>Opciones</th>
                  
                  
                </tr>
                </thead>
                <tbody>
                @foreach($creditos as $credito)
              
                <tr>
                  <td>{{ $credito->fecha }}</td>
                  <td>{{ $credito->total }}</td>

                  <td>
                 
                  <a class="btn btn-success btn-flat" href=""><i class="fa fa-fw fa-pencil-square-o" aria-hidden="true"></i></a> 

                 
                  
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
      <a class="btn btn-success btn-flat" href="{{ url()->previous() }}"><i class="fa fa-fw fa-mail-reply-all" aria-hidden="true"></i>Volver</a>
      <!-- /.row -->
    </section>












    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->



@endsection