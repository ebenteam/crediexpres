@extends('desing.formularios')
@section('content')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Cuenta Total 
        <small>Consolidado de los totales. <strong>{{ $date }}</strong></small>
      </h1>
     
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-fw fa-line-chart"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Capital</span>
              <span class="info-box-number">{{ number_format($totalcap,0) }}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-fw fa-line-chart"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Interes</span>
              <span class="info-box-number">{{ number_format($totalint,0) }}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-fw fa-line-chart"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total</span>
              <span class="info-box-number">{{ number_format($capinter,0) }}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-star-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Creditos</span>
              <span class="info-box-number">{{ $numcre }}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- =========================================================== -->

      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-aqua">
            <span class="info-box-icon"><i class="fa fa-fw fa-area-chart"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Capital Actual</span>
              <span class="info-box-number">{{ number_format($capact,0)}}</span>

              <div class="progress">
                <div class="progress-bar" style="width: 100%"></div>
              </div>
                  <span class="progress-description">
                    Capital menos abonos 
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-green">
            <span class="info-box-icon"><i class="fa fa-fw fa-area-chart"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Utilidad Total</span>
              <span class="info-box-number">{{ number_format($utiact,0)}}</span>

              <div class="progress">
                <div class="progress-bar" style="width: 100%"></div>
              </div>
                  <span class="progress-description">
                    Todo el interes
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-red">
            <span class="info-box-icon"><i class="fa fa-fw fa-area-chart"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Abonos</span>
              <span class="info-box-number">{{ number_format($sumabon,0)}}</span>

              <div class="progress">
                <div class="progress-bar" style="width: 100%"></div>
              </div>
                  <span class="progress-description">
                    Total de abonos 
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-yellow">
            <span class="info-box-icon"><i class="fa fa-fw fa-area-chart"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Ganancia Futura</span>
              <span class="info-box-number">{{ number_format($futuro,0)}}</span>

              <div class="progress">
                <div class="progress-bar" style="width: 100%"></div>
              </div>
                  <span class="progress-description">
                    Utilidad futura
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- =========================================================== -->








@endsection