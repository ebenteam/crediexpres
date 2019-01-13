@extends('desing.tablas')
@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Abonos

       
        <small><strong>Hola</strong>/ Información detallada del Dia</small>
        
      
      </h1> <br>
      


     
    
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">
           
          <a href=" " class="btn btn-primary btn-block margin-bottom">Nuevo Abono</a>
         
          <div class="box box-solid">
            <div class="box-header with-border">
        
              <h3 class="box-title">Credito</h3>
          
              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            
            <div class="box-body no-padding">

              <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#"><i class="fa fa-fw fa-rocket"></i>Inicio Credito<span class="pull-right badge bg-blue">{{ $formatfecha }}</span></a></li>
                <li><a href="#"><i class="fa fa-fw fa-money"></i>Capital<span class="pull-right badge bg-aqua">2</span></a></li>
                <li><a href="#"><i class="fa fa-fw fa-line-chart"></i>Interes<span class="pull-right badge bg-green">3</span></a></li>
                
              </ul>
            
            </div>
            
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Datos</h3>

              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked">
                <li><a href="#"><i class="fa fa-circle-o text-red"></i>Capital Actual:<span class="pull-right badge bg-blue"></span></a></li>
                <li><a href="#"><i class="fa fa-circle-o text-yellow"></i>Utilidad Actual:<span class="pull-right badge bg-green"></span></a></li>
               

              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Abonos Realizados</h3>
              @if (session('info'))
             <div class="alert alert-success alert-dismissible">
             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
             <h4><i class="icon fa fa-check"></i> Correcto!</h4>
             <strong>{{ session('info') }}</strong>
              </div>
             @endif

              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
          
              <div class="table-responsive mailbox-messages">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>

                  <th>Fecha</th>
                  <th>Cuota</th>
                  <th>Cobrador</th>
                  <th>Total</th>
                  <th>Cliente</th>
                  
                  
                </tr>
                </thead>
                <tbody>
                @foreach($abonos as $abono)
              
                <tr>
                  <td>{{ $abono->fecha }}</td>
                  <td>{{ number_format($abono->cuota,0) }}</td>
                  <td>{{ $abono->usuario}}</td>
                  <td>{{ $abono->total}}</td>
                  <td>{{ $abono->nombres}}</td>
                 

                 
                 

                  
                </tr>

                @endforeach
               </tbody>
                </tfoot>
              </table>
                <!-- /.table -->
              </div>
              <!-- /.mail-box-messages -->
            </div>
            <!-- /.box-body -->
           
          
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->





@endsection