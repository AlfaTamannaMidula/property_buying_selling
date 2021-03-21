
<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://colorlib.com//polygon/concept/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="https://colorlib.com//polygon/concept/assets/vendor/fonts/circular-std/style.css">
    <link rel="stylesheet" href="https://colorlib.com//polygon/concept/assets/libs/css/style.css">
    <link rel="stylesheet" href="https://colorlib.com//polygon/concept/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="https://colorlib.com//polygon/concept/assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="https://colorlib.com//polygon/concept/assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="https://colorlib.com//polygon/concept/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://colorlib.com//polygon/concept/assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="https://colorlib.com//polygon/concept/assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <title>Concept - Bootstrap 4 Admin Dashboard Template</title>


</head>
<body>

<div class="dashboard-main-wrapper">

    @include('backend.partials.header')
    <div class="dashboard-header">
        <nav class="navbar navbar-expand-lg bg-white fixed-top">
            <a class="navbar-brand" href="index.html">Property Buying Selling</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

    </div>

    @include('backend.partials.sidebar')



    <div class="dashboard-wrapper">
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">



                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                    </div>
                </div>

@yield('page')

            </div>
        </div>
    </div>



    <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        Copyright © 2018 Concept. All rights reserved.
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="text-md-right footer-links d-none d-sm-block">
                            <a href="javascript: void(0);">About</a>
                            <a href="javascript: void(0);">Support</a>
                            <a href="javascript: void(0);">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>



</div>



<script src="https://colorlib.com//polygon/concept/assets/vendor/jquery/jquery-3.3.1.min.js"></script>

<script src="https://colorlib.com//polygon/concept/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>

<script src="https://colorlib.com//polygon/concept/assets/vendor/slimscroll/jquery.slimscroll.js"></script>

<script src="https://colorlib.com//polygon/concept/assets/libs/js/main-js.js"></script>

<script src="https://colorlib.com//polygon/concept/assets/vendor/charts/chartist-bundle/chartist.min.js"></script>

<script src="https://colorlib.com//polygon/concept/assets/vendor/charts/sparkline/jquery.sparkline.js"></script>

<script src="https://colorlib.com//polygon/concept/assets/vendor/charts/morris-bundle/morris.js"></script>
<script src="https://colorlib.com//polygon/concept/assets/vendor/charts/morris-bundle/raphael.min.js"></script>

<script src="https://colorlib.com//polygon/concept/assets/vendor/charts/c3charts/c3.min.js"></script>
<script src="https://colorlib.com//polygon/concept/assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
<script src="https://colorlib.com//polygon/concept/assets/vendor/charts/c3charts/C3chartjs.js"></script>
<script src="https://colorlib.com//polygon/concept/assets/libs/js/dashboard-ecommerce.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>
</body>
</html>
