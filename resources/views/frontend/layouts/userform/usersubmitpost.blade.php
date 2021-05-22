@include('frontend.partials.header')

    <!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="{{asset('frontend')}}/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="{{asset('frontend')}}/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="{{asset('frontend')}}/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="{{asset('frontend')}}/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('frontend')}}/css/main.css" rel="stylesheet" media="all">
</head>

<body>
<div class="modal-body">


    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif



        @if($isExist)
            <h1>For posting you have to purchase a <strong>Package</strong></h1>
        @else
      <form action="{{route('user.post')}}" method="post" enctype="multipart/form-data">
        @csrf



        <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
            <div class="wrapper wrapper--w790">
                <div class="card card-5">
                    <div class="card-heading">
                        <h2 class="title">Post Form</h2>
                    </div>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="name">Post Title</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="posttitle">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Description</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="description">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Property Image</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-4" type="file" multiple name="image[]">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Property Documents</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-4" type="file" multiple name="imageDoc[]">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Price</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="price">
                                </div>
                            </div>
                        </div>

                        <div class="form-row ">
                            <div class="name">Address</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-3">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="region">
                                            <label class="label--desc">Region</label>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="sector">
                                            <label class="label--desc">Sector</label>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="road">
                                            <label class="label--desc">road</label>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="plot">
                                            <label class="label--desc">Plot</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Caterogy Id</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="categoryId">
                                            @foreach($category as $cat)
                                                <option selected="selected" value="{{($cat->id)}}">{{($cat->name)}}</option>
                                            @endforeach
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Status</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="status">
                                            <option selected="selected" value="active">Active</option>
                                            <option value="inactive">Inactive</option>

                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          @endif
      </form>

</div>


    </div>






</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
<!-- end document-->

<!-- Jquery JS-->
<script src="{{asset('frontend')}}/vendor/jquery/jquery.min.js"></script>
<!-- Vendor JS-->
<script src="{{asset('frontend')}}/vendor/select2/select2.min.js"></script>
<script src="{{asset('frontend')}}/vendor/datepicker/moment.min.js"></script>
<script src="{{asset('frontend')}}/vendor/datepicker/daterangepicker.js"></script>

<!-- Main JS-->
<script src="{{asset('frontend')}}/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->

@include('frontend.partials.footer')
