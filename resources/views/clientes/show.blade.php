@extends('desing.formularios')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Detalle Cliente
        <small>Informacion detallada del cliente</small>
      </h1>
      		
    </section>

    <section class="content">

    <div class="box box-default">

    <div class="box-header with-border">

<section class="content">

<div class="form-group">
<h4 class="text-blue"><i class="glyphicon glyphicon-user"></i> <strong>{{ $clientes->nombres }} {{ $clientes->apellidos }}</strong> </h4>
</div>

<div class="form-group">
 <h4 class="text-black"><i class="glyphicon glyphicon-home"></i> {{ $clientes->dir_casa }} </h4>
</div>

<div class="form-group">
 <h4 class="text-blue"><i class="glyphicon glyphicon-equalizer"></i> {{ $clientes->dir_trabajo }} </h4>
</div>

<div class="form-group">
 <h4 class="text-black"><i class="glyphicon glyphicon-phone-alt"></i> {{ $clientes->cel_uno }} </h4>
</div>

<div class="form-group">
 <h4 class="text-blue"><i class="glyphicon glyphicon-earphone"></i> {{ $clientes->cel_dos }} </h4>
</div>

<h2 class="page-header">Social Widgets</h2>

<div class="row">
  <div class="col-md-4">
    <!-- Widget: user widget style 1 -->
    <div class="box box-widget widget-user-2">
      <!-- Add the bg color to the header using any of the bg-* classes -->
      <div class="widget-user-header bg-yellow">
        <div class="widget-user-image">
          <img class="img-circle" src="../dist/img/user7-128x128.jpg" alt="User Avatar">
        </div>
        <!-- /.widget-user-image -->
        <h3 class="widget-user-username">{{ $clientes->nombres }} {{ $clientes->apellidos }}</h3>
        <h5 class="widget-user-desc">Lead Developer</h5>
      </div>
      <div class="box-footer no-padding">
        <ul class="nav nav-stacked">
          <li><a href="#"><strong>Dirección: </strong>{{ $clientes->dir_casa }}<span class="pull-right badge bg-blue"></span></a></li>
          <li><a href="#">Tasks <span class="pull-right badge bg-aqua">5</span></a></li>
          <li><a href="#">Completed Projects <span class="pull-right badge bg-green">12</span></a></li>
          <li><a href="#">Followers <span class="pull-right badge bg-red">842</span></a></li>
        </ul>
      </div>
    </div>
    <!-- /.widget-user -->
  </div>
  <!-- /.col -->
  <div class="col-md-4">
    <!-- Widget: user widget style 1 -->
    <div class="box box-widget widget-user">
      <!-- Add the bg color to the header using any of the bg-* classes -->
      <div class="widget-user-header bg-aqua-active">
        <h3 class="widget-user-username">Alexander Pierce</h3>
        <h5 class="widget-user-desc">Founder &amp; CEO</h5>
      </div>
      <div class="widget-user-image">
        <img class="img-circle" src="../dist/img/user1-128x128.jpg" alt="User Avatar">
      </div>
      <div class="box-footer">
        <div class="row">
          <div class="col-sm-4 border-right">
            <div class="description-block">
              <h5 class="description-header">3,200</h5>
              <span class="description-text">SALES</span>
            </div>
            <!-- /.description-block -->
          </div>
          <!-- /.col -->
          <div class="col-sm-4 border-right">
            <div class="description-block">
              <h5 class="description-header">13,000</h5>
              <span class="description-text">FOLLOWERS</span>
            </div>
            <!-- /.description-block -->
          </div>
          <!-- /.col -->
          <div class="col-sm-4">
            <div class="description-block">
              <h5 class="description-header">35</h5>
              <span class="description-text">PRODUCTS</span>
            </div>
            <!-- /.description-block -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
    </div>
    <!-- /.widget-user -->
  </div>
  <!-- /.col -->
  <div class="col-md-4">
    <!-- Widget: user widget style 1 -->
    <div class="box box-widget widget-user">
      <!-- Add the bg color to the header using any of the bg-* classes -->
      <div class="widget-user-header bg-black" style="background: url('../dist/img/photo1.png') center center;">
        <h3 class="widget-user-username">Elizabeth Pierce</h3>
        <h5 class="widget-user-desc">Web Designer</h5>
      </div>
      <div class="widget-user-image">
        <img class="img-circle" src="../dist/img/user3-128x128.jpg" alt="User Avatar">
      </div>
      <div class="box-footer">
        <div class="row">
          <div class="col-sm-4 border-right">
            <div class="description-block">
              <h5 class="description-header">3,200</h5>
              <span class="description-text">SALES</span>
            </div>
            <!-- /.description-block -->
          </div>
          <!-- /.col -->
          <div class="col-sm-4 border-right">
            <div class="description-block">
              <h5 class="description-header">13,000</h5>
              <span class="description-text">FOLLOWERS</span>
            </div>
            <!-- /.description-block -->
          </div>
          <!-- /.col -->
          <div class="col-sm-4">
            <div class="description-block">
              <h5 class="description-header">35</h5>
              <span class="description-text">PRODUCTS</span>
            </div>
            <!-- /.description-block -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
    </div>
    <!-- /.widget-user -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->


</div>
</div>
</div>


</section>





@endsection
                 


               