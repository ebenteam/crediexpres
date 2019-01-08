@extends('desing.tablas')
@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Abonos

       
        <small><strong>{{ $clientes->nombres }} {{ $clientes->apellidos }}</strong>/ Información detallada del Credito y el Abono</small>
        
      
      </h1> <br>
      


     
    
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">
           @can ('abonos.create')
          <a href="{{ route('abonos.create',$creditos->id)}}" class="btn btn-primary btn-block margin-bottom">Nuevo Abono</a>
           @endcan
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
                <li class="active"><a href="#"><i class="fa fa-fw fa-rocket"></i>Inicio Credito<span class="pull-right badge bg-blue">{{ $creditos->fecha }}</span></a></li>
                <li><a href="#"><i class="fa fa-fw fa-money"></i>Capital<span class="pull-right badge bg-aqua">{{ $creditos->capital }}</span></a></li>
                <li><a href="#"><i class="fa fa-fw fa-line-chart"></i>Interes<span class="pull-right badge bg-green">{{ $creditos->interes }}</span></a></li>
                <li><a href="#"><i class="fa fa-fw fa-usd"></i>Total<span class="pull-right badge bg-yellow">{{ $creditos->total }}</span></a></li>
                <li><a href="#"><i class="fa fa-fw fa-calendar-minus-o"></i>Cuotas<span class="pull-right badge bg-red">{{ $creditos->cuotas }}</span></a></li>
                <li><a href="#"><i class="fa fa-fw fa-calendar-plus-o"></i>Plazo<span class="pull-right badge bg-green">{{ $creditos->plazo }}</span></a></li>
                <li><a href="#"><i class="fa fa-fw fa-table"></i>Frecuencia Pago<span class="pull-right badge bg-blue">{{ $creditos->fre_pago }}</span></a></li>
              </ul>
            
            </div>
            
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Credito vs Abonos</h3>

              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked">
                <li><a href="#"><i class="fa fa-circle-o text-red"></i>Capital Actual:<span class="pull-right badge bg-red">{{ $creditos->cap_actual }}</span></a></li>
                <li><a href="#"><i class="fa fa-circle-o text-yellow"></i>Interes Actual:<span class="pull-right badge bg-yellow">{{ $creditos->int_actual }}</span></a></li>
                <li><a href="#"><i class="fa fa-circle-o text-light-green"></i>Total Actual:<span class="pull-right badge bg-green"> {{ $creditos->tot_actual }}</span></a></li>
                <li><a href="#"><i class="fa fa-circle-o text-light-blue"></i>Cuota Actual:<span class="pull-right badge bg-blue"> {{ $creditos->cuo_actual }}</span></a></li>

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
                  <th>Opciones</th>
                  
                  
                </tr>
                </thead>
                <tbody>
                @foreach($abonos as $abono)
              
                <tr>
                  <td>{{ $abono->fecha }}</td>
                  <td>{{ $abono->cuota }}</td>
                 

                  <td>
                  @can ('abonos.edit')
                 <a class="btn btn-warning btn-flat" href="{{ route('abonos.edit',$abono->id)}}"><i class="fa fa-fw fa-pencil-square-o" aria-hidden="true"></i></a>
                  @endcan

                  @can ('abonos.show')
                 <a class="btn btn-success btn-flat" href="{{ route('abonos.show',$abono->id)}}"><i class="fa fa-fw fa-pencil-square-o" aria-hidden="true"></i></a>
                  @endcan

                  @can ('abonos.destroy')
                  {!! Form::open(['route' => ['abonos.destroy',$abono->id],
                  'method' => 'DELETE']) !!} 
                  <button class="btn btn-danger btn-flat"><i class="fa fa-fw fa-pencil-square-o" aria-hidden="true"></i></button>
                   {!! Form::close() !!}    
                  @endcan


                  
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