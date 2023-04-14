<!DOCTYPE html>
<html lang="en" style="height: auto;" class>
  
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Selamat Datang | Website Lapor Pak !!!</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="/adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/adminlte/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="/adminlte/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/adminlte/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="/adminlte/css/skins/_all-skins.min.css">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<script>
        var AdminLTEOptions = {
          //Enable sidebar expand on hover effect for sidebar mini
          //This option is forced to true if both the fixed layout and sidebar mini
          //are used together
          sidebarExpandOnHover: true,
          //BoxRefresh Plugin
          enableBoxRefresh: true,
          //Bootstrap.js tooltip
          enableBSToppltip: true
        };
      </script>
      <!-- <script src="dist/js/app.js" type="text/javascript"></script> -->

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

<!-- Styles -->
<link href="/adminlte/css/AdminLTE.min.css" rel="stylesheet">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo --> 
    <a href="{{ url('home') }}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <!-- <span class="logo-mini"><b>L</b>P !!</span> -->
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Selamat Datang</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <!-- <li class="nav-item">
               <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>          -->
            @guest

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <!-- <a class="dropdown-item" href="{{ url('profile') }}">
                                       Profile
                                    </a> -->
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>

                        @endguest
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
   

      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      
      <ul class="sidebar-menu" data-widget="tree">
        <!-- <li class="header">MAIN NAVIGATION</li> -->
        <li class="treeview">
          <a href="#">
            <!-- <i class="fa fa-dashboard"></i><span>Menu</span> -->
            <img src="{{ url('images/Logo Lapor.png') }}" width="200"> 
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i> 
            </span>
          </a>
          <ul class="treeview-menu">
                  <li class="nav-item">
                     <a class="nav-link" href="{{ url('home') }}"><i class="fa fa-circle-o"></i>{{ __('Home') }}</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="{{ url('layanan-web') }}"><i class="fa fa-circle-o"></i>{{ __('Layanan') }}</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="{{ url('informasi-web') }}"><i class="fa fa-circle-o"></i>{{ __('Informasi') }}</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="{{ url('pengacara-web') }}"><i class="fa fa-circle-o"></i>{{ __('Pengacara') }}</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="{{ url('contact-us') }}"><i class="fa fa-circle-o"></i>{{ __('Contact') }}</a> 
                  </li>
                </ul>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('content')
  </div>
  <!-- /.content-wrapper -->
  
  <footer class="main-footer" >
      <div class="pull-right hidden-xs">
      </div>
      <strong>Copyright &copy; 2021 <a href="{{ url('home') }}">Mahasiswa Informatika UISI</a>.</strong> All rights
      reserved.
    </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>

      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>

<!-- jQuery 3 -->
<script src="/adminlte/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="/adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="/adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="/adminlte/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/adminlte/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/adminlte/js/demo.js"></script>
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>

</body>
</html>
