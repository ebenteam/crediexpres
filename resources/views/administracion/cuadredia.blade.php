@extends('desing.formularios')
@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Cuadre del Dia
       
        <small>Información detallada del Dia</small>
        
      
      </h1> <br>
      


     
    
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">
           
          <a href=" " class="btn btn-primary btn-block margin-bottom">Fecha Anterior</a>
         
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
              <div class="form-group">
              <label>Fecha:</label>
              <div class="input-group date">
              <div class="input-group-addon">
              <i class="fa fa-calendar"></i>
              </div>
              <input type="text" class="form-control pull-right" id="datepicker" name="fecha" value="{{ $formatfecha }}"/>
              </div>
              <!-- /.input group -->
              </div>
              
                <li><a href="#"><i class="fa fa-fw fa-money"></i>Capital<span class="pull-right badge bg-aqua">{{number_format($resabonos,0) }}</span></a></li>
                <li><a href="#"><i class="fa fa-fw fa-line-chart"></i>Utilidad<span class="pull-right badge bg-green">3</span></a></li>
                <li class="active"><a href="#"><i class="fa fa-fw fa-rocket"></i>Total Dia:<span class="pull-right badge bg-blue">{{ number_format($sumcuota,0) }}</span></a></li>
                
              </ul>
            
            </div>
            
            <!-- /.box-body -->
          </div>
        
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
                  <th>Cliente</th>
                  <th>Cobrador</th>
                  
                  
                  
                </tr>
                </thead>
                <tbody>
                @foreach($abonos as $abono)
              
                <tr>
                  <td>{{ $abono->fecha }}</td>
                  <td>{{ number_format($abono->cuota,0) }}</td>
                  <td>{{ $abono->nombres }} {{ $abono->apellidos }}</td>
                  <td>{{ $abono->usuario}}</td>
                  
                 

                 
                 

                  
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