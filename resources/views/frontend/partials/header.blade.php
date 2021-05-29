<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Property Buying Selling | Home page</title>
    <meta name="description" content="GARO is a real-estate template">
    <meta name="author" content="Kimarotec">
    <meta name="keyword" content="html5, css, bootstrap, property, real-estate theme , bootstrap template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>

    <!-- Place favicon.ico  the root directory -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/normalize.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/fontello.css">
    <link href="{{asset('frontend')}}/assets/fonts/icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
    <link href="{{asset('frontend')}}/assets/fonts/icon-7-stroke/css/helper.css" rel="stylesheet">
    <link href="{{asset('frontend')}}/css/animate.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/icheck.min_all.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/price-range.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/owl.carousel.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/owl.theme.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/owl.transitions.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/jquery.slitslider.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/style.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/responsive.css">
    <noscript>
        <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/assets/css/styleNoJS.css" />
    </noscript>
</head>
@php App\Models\Post::where('expire_at','<',now()->format('Y-m-d'))->update(['status'=>'expired']); @endphp
<body>


<div class="header-connect">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-8  col-xs-12">
                <div class="header-half header-call">
                    <p>
                        <span><i class="pe-7s-call"></i> 22222222222</span>
                        <span><i class="pe-7s-mail"></i> property_buying_selling@company.com</span>
                    </p>
                </div>
            </div>

        </div>
    </div>
</div>




<nav class="navbar navbar-default " style="background:black">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->


        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse yamm" id="navigation">
            <div class="button navbar-right">



            </div>
            <div class="col-md-12">
            <div class="col-md-12">
            <ul class="main-nav nav navbar-nav navbar-right">

                <li class="wow fadeInDown" data-wow-delay="0.1s"><a class="" href="{{route('homepage')}}">Home</a></li>
                <li class="wow fadeInDown" data-wow-delay="0.1s"><a class="" href="{{route('post.all')}}">Properties</a></li>

                <li class="wow fadeInDown" data-wow-delay="0.4s"><a href="{{route('contact.details')}}">Contact</a></li>
                @auth('user')
                <li class="wow fadeInDown" data-wow-delay="0.4s"><a href="{{route('user.profile')}}">User Profile</a></li>
                @endauth

                @auth('user')
                    <span style="color:white;">{{auth('user')->user()->name}}</span>  <a class="btn btn-danger" href="{{route('logout')}}"> Logout</a>
                @else
                    <a class="btn btn-warning" href="{{route('login.registration.form')}}">Login / Registration</a>
                @endauth



            </ul>
            </div>
            </div>
        </div><!-- /.navbar-collapse -->
<div class="col-md-12">
    <div class="col-md-4"></div>
    <div class="col-md-4"></div>
    <div class="col-md-2"></div>
    <div class="col-md-2">

    </div>
</div>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
