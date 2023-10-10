<!doctype html>
<html lang="en">


<!-- Mirrored from themesbrand.com/minia/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Jul 2021 16:31:26 GMT -->
<head>

        <meta charset="utf-8" />
        <title>AutoSearch</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

        <!-- plugin css -->
        <link href="{{ asset ('assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet" type="text/css" />

        <!-- preloader css -->
        <link rel="stylesheet" href="{{ asset ('assets/css/preloader.min.css')}}" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="{{ asset ('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset ('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body>

     <!-- <body data-layout="horizontal"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">


            @include('header')

            <!-- ========== Left Sidebar Start ========== -->
            @include('sidebar')
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start  Content here -->

             <div class="main-content">
                 @yield('content')
                <!-- End Page-content -->

                 <!-- Start  footer here -->
                 @include('footer')

            </div>

            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->



        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="{{ asset ('assets/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{ asset ('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset ('assets/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{ asset ('assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{ asset ('assets/libs/node-waves/waves.min.js')}}"></script>
        <script src="{{ asset ('assets/libs/feather-icons/feather.min.js')}}"></script>
        <!-- pace js -->
        <script src="{{ asset ('assets/libs/pace-js/pace.min.js')}}"></script>

        <!-- apexcharts -->
        <script src="{{ asset ('assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- Plugins js-->
        <script src="{{ asset ('assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
        <script src="{{ asset ('assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js')}}"></script>

        <!-- dashboard init -->
        <script src="{{ asset ('assets/js/pages/dashboard.init.js')}}"></script>

        <script src="{{ asset ('assets/js/app.js')}}"></script>


        <!-- Required datatable js -->
        <script src="{{ asset ('assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{ asset ('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
        <!-- Buttons examples -->
        <script src="{{ asset ('assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
        <script src="{{ asset ('assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
        <script src="{{ asset ('assets/libs/jszip/jszip.min.js')}}"></script>
        <script src="{{ asset ('assets/libs/pdfmake/build/pdfmake.min.js')}}"></script>
        <script src="{{ asset ('assets/libs/pdfmake/build/vfs_fonts.js')}}"></script>
        <script src="{{ asset ('assets/libs/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
        <script src="{{ asset ('assets/libs/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
        <script src="{{ asset ('assets/libs/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>

        <!-- Responsive examples -->
        <script src="{{ asset ('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
        <script src="{{ asset ('assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>

        <!-- Datatable init js -->
        <script src="{{ asset ('assets/js/pages/datatables.init.js')}}"></script>

        <script src="{{ asset ('assets/js/app.js')}}"></script>

    </body>


<!-- Mirrored from themesbrand.com/minia/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Jul 2021 16:32:00 GMT -->
</html>
