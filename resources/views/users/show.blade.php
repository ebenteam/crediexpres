@extends('desing.formularios')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Detalle del Usuario
        <small>Informacion detallada del Usuario</small>
      </h1>
      		
    </section>

    <section class="content">

    <div class="box box-default">

    <div class="box-header with-border">

<section class="content">

<div class="form-group">
<h4 class="text-blue"><i class="glyphicon glyphicon-user"></i> <strong>Id: {{ $users->id }} </strong> </h4>
</div>

<div class="form-group">
<h4 class="text-blue"><i class="glyphicon glyphicon-user"></i> <strong>{{ $users->name }} </strong> </h4>
</div>

<div class="form-group">
 <h4 class="text-black"><i class="glyphicon glyphicon-home"></i> {{ $users->email }} </h4>
</div>



</div>
</div>
</div>

</section>



@endsection
                 


               