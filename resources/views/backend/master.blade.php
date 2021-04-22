
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('backend')}}/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="{{asset('backend')}}/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('backend')}}/assets/libs/css/style.css">
    <link rel="stylesheet" href="{{asset('backend')}}/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="{{asset('backend')}}/assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="{{asset('backend')}}/assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="{{asset('backend')}}/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{asset('backend')}}/assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="{{asset('backend')}}/assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <title>Concept - Bootstrap 4 Admin Dashboard Template</title>
    {{--log in css start--}}
<!-- Icons font CSS-->
    <link href="{{asset('backend')}}/userform/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="{{asset('backend')}}/userform/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="{{asset('backend')}}/userform/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="{{asset('backend')}}/userform/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('backend')}}/userform/css/main.css" rel="stylesheet" media="all">
    <!-- Jquery JS-->
    <script src="{{asset('backend')}}/userform/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="{{asset('backend')}}/userform/vendor/select2/select2.min.js"></script>
    <script src="{{asset('backend')}}/userform/vendor/datepicker/moment.min.js"></script>
    <script src="{{asset('backend')}}/userform/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="{{asset('backend')}}/userform/js/global.js"></script>

    {{--end--}}
</head>

<body>
<!-- ============================================================== -->
<!-- main wrapper -->
<!-- ============================================================== -->
<div class="dashboard-main-wrapper">
    <!-- ============================================================== -->
    <!-- navbar -->
    <!-- ============================================================== -->
    @include('backend.partials.header')
    <!-- ============================================================== -->
    <!-- end navbar -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- left sidebar -->
    @include('backend.partials.sidebar')
    <!-- end left sidebar -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- wrapper  -->
    <!-- ============================================================== -->
    <div class="dashboard-wrapper">
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                <!-- ============================================================== -->
                <!-- pageheader  -->
                <!-- ============================================================== -->

                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title"> {{$title}} </h2>
                            <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Dashboard Template</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader  -->
                <!-- ============================================================== -->
                <div class="ecommerce-widget">



@yield('page')




                </div>
            </div>
        </div>
    </div>

        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->

            </div>
<div class="footer">

{{--    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">--}}
        <div class="text-md-center footer-links d-none d-sm-block">
            Copyright © 2018 Concept. All rights reserved.
        </div>
    </div>
</div>
        </div>
        <!-- ============================================================== -->
        <!-- end footer -->
        <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- end wrapper  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- end main wrapper  -->
<!-- ============================================================== -->
<!-- Optional JavaScript -->
<!-- jquery 3.3.1 -->
<script src="{{asset('backend')}}/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
<!-- bootstap bundle js -->
<script src="{{asset('backend')}}/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
<!-- slimscroll js -->
<script src="{{asset('backend')}}/assets/vendor/slimscroll/jquery.slimscroll.js"></script>
<!-- main js -->
<script src="{{asset('backend')}}/assets/libs/js/main-js.js"></script>
<!-- chart chartist js -->
<script src="{{asset('backend')}}/assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
<!-- sparkline js -->
<script src="{{asset('backend')}}/assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
<!-- morris js -->
<script src="{{asset('backend')}}/assets/vendor/charts/morris-bundle/raphael.min.js"></script>
<script src="{{asset('backend')}}/assets/vendor/charts/morris-bundle/morris.js"></script>
<!-- chart c3 js -->
<script src="{{asset('backend')}}/assets/vendor/charts/c3charts/c3.min.js"></script>
<script src="{{asset('backend')}}/assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
<script src="{{asset('backend')}}/assets/vendor/charts/c3charts/C3chartjs.js"></script>
<script src="{{asset('backend')}}/assets/libs/js/dashboard-ecommerce.js"></script>
</body>

</html>
