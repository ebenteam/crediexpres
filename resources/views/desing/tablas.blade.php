<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Crediexpres | Te acerca a lo que quieres</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
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
    <img src="dist/img/user2-160x160.png" class="img-circle" alt="User Image">
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

  @can ('clientes.index')
  <li class="{{ request()->is('clientes') ? 'active' : '' }}"><a href="{{ route('clientes.index') }}"><i class="fa fa-user"></i> <span>Clientes</span></a></li>
  @endcan

</ul>
<!-- /.sidebar-menu -->
</section>

      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
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
    




<script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- DataTables -->
<script src="{{asset('bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<!-- SlimScroll -->
<script src="{{asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('dist/js/demo.js')}}"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
