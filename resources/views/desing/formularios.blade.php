<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Crediexpres | Te acerca a lo que quieres</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- daterange picker -->
  <link rel="stylesheet" href="{{asset('bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="{{asset('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="{{asset('plugins/iCheck/all.css')}}">

  <!-- Bootstrap Color Picker -->

  <link rel="stylesheet" href="{{asset('bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css')}}">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="{{asset('plugins/timepicker/bootstrap-timepicker.min.css')}}">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{asset('bower_components/select2/dist/css/select2.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{asset('dist/css/skins/_all-skins.min.css')}}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="{{asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic')}}">

</head>


<body class="hold-transition skin-blue sidebar-mini">

  <div class="wrapper">

     <!-- Main Header -->
     <header class="main-header">

<!-- Logo -->
<a href="index2.html" class="logo">
<!-- mini logo for sidebar mini 50x50 pixels -->
<span class="logo-mini"><b>CXP</b></span>
<!-- logo for regular state and mobile devices -->
<span class="logo-lg"><b>Crediexpres</b>$</span>
</a>

<!-- Header Navbar -->
<nav class="navbar navbar-static-top" role="navigation">
  <!-- Sidebar toggle button-->
  <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
    <span class="sr-only">Panel de Navegación</span>
  </a>
  <!-- Navbar Right Menu -->
  <div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
      <!-- Messages: style can be found in dropdown.less-->
      <li class="dropdown messages-menu">
        <!-- Menu toggle button -->
       
        <ul class="dropdown-menu">
          <li>
            <!-- inner menu: contains the messages -->
            <ul class="menu">
              <li><!-- start message -->
                
              
              </li>
              <!-- end message -->
            </ul>
            <!-- /.menu -->
          </li>
         
        </ul>
      </li>
      <!-- /.messages-menu -->

      <!-- Notifications Menu -->
      <li class="dropdown notifications-menu">
        <!-- Menu toggle button -->
       
        <ul class="dropdown-menu">
         
          <li>
            <!-- Inner Menu: contains the notifications -->
            <ul class="menu">
              <li><!-- start notification -->
               
              </li>
              <!-- end notification -->
            </ul>
          </li>
         
        </ul>
      </li>
      <!-- Tasks Menu -->
      <li class="dropdown tasks-menu">
        <!-- Menu Toggle Button -->
        

      </li>
      <!-- User Account Menu -->
      <li class="dropdown user user-menu">
        <!-- Menu Toggle Button -->
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                <img src="{{asset('dist/img/user2-160x160.png')}}" class="user-image" alt="User Image">
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <span class="hidden-xs">{{ Auth::user()->name }}</span>
              </a>
        <ul class="dropdown-menu">
          <!-- The user image in the menu -->
          <li class="user-header">
          <img src="{{asset('dist/img/user2-160x160.png')}}" class="img-circle" alt="User Image">
           <p>
            {{ Auth::user()->name }}
            <small>{{ Auth::user()->tipo_usuario }}</small>
            </p>
          </li>
          <!-- Menu Body -->
          <!-- Menu Footer-->
          <li class="user-footer">
            <div class="pull-left">

            </div>
            <div class="pull-right">

              <button type="button" class="btn bg-maroon btn-flat margin" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                  {{ __('Salir de Crediexpre$') }}
              </button>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>

            </div>

          </li>
        </ul>
      </li>
      <!-- Control Sidebar Toggle Button -->
      <li>
        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
      </li>
    </ul>
  </div>
</nav>
</header>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

<!-- sidebar: style can be found in sidebar.less -->

<section class="sidebar">


<!-- Sidebar user panel (optional) -->
<div class="user-panel">
          <div class="pull-left image">
            <img src="{{asset('dist/img/user2-160x160.png')}}" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>{{ Auth::user()->name }}</p>
            <!-- Status -->
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>



<!-- Sidebar Menu -->
<ul class="sidebar-menu" data-widget="tree">
  <li class="header">Menu</li>
  <!-- Optionally, you can add icons to the links -->
  
  @can ('creditos.index')
  <li class="{{ request()->is('creditos') ? 'active' : '' }}"><a href="{{ route('creditos.index') }}"><i class="fa fa-fw fa-cogs"></i> <span>Creditos y Abonos</span></a></li>
  @endcan

  <li class="treeview">
          <a href="#">
            <i class="fa fa-fw fa-line-chart"></i> <span>Creditos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" style="display: none;">

          @can ('creditos.index')
          <li><a href="{{ route('creditos.index') }}"><i class="fa fa-circle-o"></i>Creditos y Abonos</a></li>
          @endcan
          
           @can ('creditos.crear')
            <li><a href="{{ route('creditos.crear') }}"><i class="fa fa-circle-o"></i>Crear Creditos</a></li>
            @endcan
           
            @can ('creditos.modificar')
            <li><a href="{{ route('creditos.modificar') }}"><i class="fa fa-circle-o"></i>Modificar Creditos</a></li>
            @endcan
           
            @can ('creditos.eliminar')
            <li><a href="{{ route('creditos.eliminar') }}"><i class="fa fa-circle-o"></i>Eliminar Creditos</a></li>
            @endcan
  
          </ul>
        </li>

  <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i> <span>Clientes</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" style="display: none;">

            @can ('clientes.ver')
            <li><a href="{{ route('clientes.ver') }}"><i class="fa fa-circle-o"></i>Detalle Clientes</a></li>
            @endcan

            @can ('clientes.create')
            <li><a href="{{ route('clientes.create') }}"><i class="fa fa-circle-o"></i>Crear Cliente</a></li>
            @endcan

            @can ('clientes.modificar')
            <li><a href="{{ route('clientes.modificar') }}"><i class="fa fa-circle-o"></i>Modificar Clientes</a></li>
            @endcan

            @can ('clientes.eliminar')
            <li><a href="{{ route('clientes.eliminar') }}"><i class="fa fa-circle-o"></i>Eliminar Clientes</a></li>
            @endcan
  
          </ul>
        </li>

 
  <li class="treeview">
          <a href="#">
            <i class="fa fa-fw fa-area-chart"></i> <span>Administrador</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" style="display: none;">

            @can ('administracion.cuadredia')
            <li><a href="{{ route('administracion.cuadredia') }}"><i class="fa fa-circle-o"></i> Cuadre Dia</a></li>
            @endcan
            @can ('administracion.cuentatotal')
            <li><a href="{{ route('administracion.cuentatotal') }}"><i class="fa fa-circle-o"></i> Cuenta Total</a></li>
            @endcan
            @can ('administracion.gastos')
            <li><a href="{{ route('administracion.gastos') }}"><i class="fa fa-circle-o"></i> Gastos</a></li>
            @endcan
            @can ('administracion.listacobros')
            <li><a href="{{ route('administracion.listacobros') }}"><i class="fa fa-circle-o"></i> Lista Cobros</a></li>
            @endcan
          </ul>
        </li>

</ul>
<!-- /.sidebar-menu -->
<!-- /.sidebar-menu -->
</section>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->


@yield('content')


<footer class="main-footer">
      <!-- To the right -->
      <div class="pull-right hidden-xs">
      Soluciones efectivas
      </div>
      <!-- Default to the left -->
      <strong>Copyright  &copy;<a href="https://ebenteam.com/">Ebenteam</a>.</strong> 
    </footer>

<!-- Control Sidebar -->
<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Create the tabs -->
  <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
  </ul>
  <!-- Tab panes -->
  <div class="tab-content">
    <!-- Home tab content -->
    <div class="tab-pane active" id="control-sidebar-home-tab">
      <h3 class="control-sidebar-heading">Asignación Permisos</h3>
      <ul class="control-sidebar-menu">
        <li>
          @can ('users.index')
          <a href="{{ route('users.index') }}">
            <i class="menu-icon fa fa-fw fa-user-plus bg-red"></i>

            <div class="menu-info">
              <h4 class="control-sidebar-subheading">Empleados</h4>
              <p>Aqui asignas permisos a los cobradores</p>
            </div>
          </a>
          @endcan
        </li>
        <li>
          @can ('roles.index')
          <a href="{{ route('roles.index') }}">
            <i class="menu-icon fa fa-fw fa-unlock-alt bg-red"></i>

            <div class="menu-info">
              <h4 class="control-sidebar-subheading">Permisos</h4>
              <p>Aqui creas permisos</p>
            </div>
          </a>
          @endcan
        </li>
      </ul>
      <!-- /.control-sidebar-menu -->
</div>
<!-- ./wrapper -->


<!-- jQuery 3 -->
<script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- Select2 -->
<script src="{{asset('bower_components/select2/dist/js/select2.full.min.js')}}"></script>
<!-- InputMask -->
<script src="{{asset('plugins/input-mask/jquery.inputmask.js')}}"></script>
<script src="{{asset('plugins/input-mask/jquery.inputmask.date.extensions.js')}}"></script>
<script src="{{asset('plugins/input-mask/jquery.inputmask.extensions.js')}}"></script>
<!-- date-range-picker -->
<script src="{{asset('bower_components/moment/min/moment.min.js')}}"></script>
<script src="{{asset('bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!-- bootstrap datepicker -->
<script src="{{asset('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<!-- bootstrap color picker -->
<script src="{{asset('bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')}}"></script>
<!-- bootstrap time picker -->
<script src="{{asset('plugins/timepicker/bootstrap-timepicker.min.js')}}"></script>
<!-- SlimScroll -->
<script src="{{asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- iCheck 1.0.1 -->
<script src="{{asset('plugins/iCheck/icheck.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('dist/js/demo.js')}}"></script>
<!-- Page script -->

<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })

    // aqui copio el codigo cambiando la variable del formulario ejemplo #datepiker2 

    // $('#datepicker2').datepicker({
    //  autoclose: true
  //  })

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
  })
</script>
</body>
</html>
