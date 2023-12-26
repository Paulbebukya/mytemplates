<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'TeresaMira library') }}</title>

    <!-- Google Font: Source Sans Pro -->
    <link href="{{ asset('template/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('template/font-awesome/css/font-awesome.css')}}" rel="stylesheet">

    <!-- Toastr style -->
    <link href="{{ asset('template/css/plugins/toastr/toastr.min.css')}}" rel="stylesheet">

    <!-- Gritter -->
    <link href="{{ asset('template/js/plugins/gritter/jquery.gritter.css')}}" rel="stylesheet">

    <link href="{{ asset('template/css/animate.css')}}" rel="stylesheet">
    <link href="{{ asset('template/css/style.css')}}" rel="stylesheet">
    <!-- links -->

</head>

<body>
    <div id="wrapper" style="max-height:100vh; overflow:hidden">
        @include('layouts.navigation')

        <div id="page-wrapper" class="gray-bg dashbard-1" >
          @include("layouts.navbar")
            
          <!-- linker content -->
            @yield("content") 

            <div class="footer">
                <div class="float-right">10GB of <strong>250GB</strong> Free.</div>
                <div><strong>Copyright</strong> Example Company &copy; 2014-2018</div>
            </div>
        </div>

        <!-- right-sidebar 


            ---------here-------------  
       
        right-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- Mainly scripts -->
    <script src="{{ asset('template/js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{ asset('template/js/popper.min.js')}}"></script>
    <script src="{{ asset('template/js/bootstrap.js')}}"></script>
    <script src="{{ asset('template/js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
    <script src="{{ asset('template/js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

    <!-- Flot -->
    <script src="{{ asset('template/js/plugins/flot/jquery.flot.js')}}"></script>
    <script src="{{ asset('template/js/plugins/flot/jquery.flot.tooltip.min.js')}}"></script>
    <script src="{{ asset('template/js/plugins/flot/jquery.flot.spline.js')}}"></script>
    <script src="{{ asset('template/js/plugins/flot/jquery.flot.resize.js')}}"></script>
    <script src="{{ asset('template/js/plugins/flot/jquery.flot.pie.js')}}"></script>

    <!-- Peity -->
    <script src="{{ asset('template/js/plugins/peity/jquery.peity.min.js')}}"></script>
    <script src="{{ asset('template/js/demo/peity-demo.js')}}"></script>

    <!-- Custom and plugin javascript -->
    <script src="{{ asset('template/js/inspinia.js')}}"></script>
    <script src="{{ asset('template/js/plugins/pace/pace.min.js')}}"></script>

    <!-- jQuery UI -->
    <script src="{{ asset('template/js/plugins/jquery-ui/jquery-ui.min.js')}}"></script>

    <!-- GITTER -->
    <script src="{{ asset('template/js/plugins/gritter/jquery.gritter.min.js')}}"></script>

    <!-- Sparkline -->
    <script src="{{ asset('template/js/plugins/sparkline/jquery.sparkline.min.js')}}"></script>

    <!-- Sparkline demo data  -->
    <script src="{{ asset('template/js/demo/sparkline-demo.js')}}"></script>

    <!-- ChartJS-->
    <script src="{{ asset('template/js/plugins/chartJs/Chart.min.js')}}"></script>

    <!-- Toastr -->
    <script src="{{ asset('template/js/plugins/toastr/toastr.min.js')}}"></script>



</body>

</html>