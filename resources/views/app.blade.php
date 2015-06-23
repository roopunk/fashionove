<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fashionove Admin Panel</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link href="{{URL::asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="{{URL::asset('plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{URL::asset('dist/css/AdminLTE.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link href="{{URL::asset('dist/css/skins/_all-skins.min.css')}}" rel="stylesheet" type="text/css" />
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>
<body class="skin-blue sidebar-mini">
<div class="wrapper">
    @include('admin.partials.header')
    @include('admin.partials.sidebar')

{{-- include('admin.partials.main_containerte--}}
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                {{@ucwords(explode('.',Route::currentRouteName())[1])}}
                <small>{{@ucwords(explode('.',Route::currentRouteName())[2])}}</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>
        @yield('content')

        <!-- Main content -->

    </div><!-- /.content-wrapper -->

    <div class='control-sidebar-bg'></div>
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.0
        </div>
        <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->t
    @include('admin.partials.settings')



    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class='control-sidebar-bg'></div>

')


    <!-- jQuery 2.1.4 -->
    <script src="{{URL::asset('plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>
    <script src="{{URL::asset('plugins/jQuery/script.js')}}"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="{{URL::asset('bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='{{URL::asset('plugins/fastclick/fastclick.min.js')}}'></script>
    <!-- AdminLTE App -->
    <script src="{{URL::asset('dist/js/app.min.js')}}" type="text/javascript"></script>
    <!-- Sparkline -->
    <script src="{{URL::asset('plugins/sparkline/jquery.sparkline.min.js')}}" type="text/javascript"></script>
    <!-- jvectormap -->
    <script src="{{URL::asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}" type="text/javascript"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="{{URL::asset('plugins/slimScroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
    <!-- ChartJS 1.0.1 -->
    <script src="{{URL::asset('plugins/chartjs/Chart.min.js')}}" type="text/javascript"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{URL::asset('dist/js/pages/dashboard2.js')}}" type="text/javascript"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="{{URL::asset('dist/js/demo.js')}}" type="text/javascript"></scr
    </div>ipt>
</body>
</html>