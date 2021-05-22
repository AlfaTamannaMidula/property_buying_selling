

@include('frontend.partials.header')
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
<!-- Body content -->


<!--End top header -->


<!-- End of nav bar -->


<div class="slide-2">
    <div id="slider" class="sl-slider-wrapper">
        <div class="sl-slider">
            <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                <div class="sl-slide-inner ">

                    <div class="bg-img bg-img-1" style="background-image: url({{asset('frontend')}}/assets/img/slide1/slider-image-4.jpg);"></div>
                    <blockquote><cite><a href="property.html">Property Buying Selling</a></cite>

                    </blockquote>
                </div>
            </div>

            <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">

                <div class="sl-slide-inner ">

                    <div class="bg-img bg-img-1" style="background-image: url({{asset('frontend')}}/assets/img/slide1/slider-image-1.jpg);"></div>
                    <blockquote><cite><a href="property.html">Welcome</a></cite>

                    </blockquote>
                </div>
            </div>
            <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">

                <div class="sl-slide-inner ">

                    <div class="bg-img bg-img-1" style="background-image: url({{asset('frontend')}}/assets/img/slide1/slider-image-2.jpg);"></div>
                    <blockquote><cite><a href="property.html">Get Your Dream Land</a></cite>

                    </blockquote>
                </div>
            </div>
            <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">

                <div class="sl-slide-inner ">

                    <div class="bg-img bg-img-1" style="background-image: url({{asset('frontend')}}/assets/img/slide1/slider-image-3.jpg);"></div>
                    <blockquote><cite><a href="property.html">Get Authentic Land</a></cite>

                    </blockquote>
                </div>
            </div>





        </div><!-- /sl-slider -->

        <nav id="nav-dots" class="nav-dots">
            <span class="nav-dot-current"></span>
            <span></span>
            <span></span>
            <span></span>
        </nav>
    </div><!-- /slider-wrapper -->
</div>






<!-- property area -->
 <div class="content-area recent-property" style="background-color: #FCFCFC; padding-bottom: 55px;">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">


                <!-- /.feature title -->
                <div class="content-area recent-property" style="background-color: #FCFCFC; padding-bottom: 55px;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
                                <!-- /.feature title -->
                                <h2>Top submitted property</h2>
                                <p>Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium. Nullam sed arcu ultricies . </p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="proerty-th">
                                @foreach($postproperty as $data)
                                <div class="col-sm-6 col-md-3 p0">
                                    <div class="box-two proerty-item">
                                        <div class="item-thumb">
                                            <a  target="_blank" href="{{route('post.details',$data->id)}}" ><img  src="{{url('images/posts/',$data->image[array_key_first($data->image)])}}"style="width:auto;"></a>
                                        </div>
                                        <div class="item-entry overflow">
                                            <h5><a href="property-1.html" >{{$data->id}}</a></h5>
                                            <h5><a href="property-1.html" >{{$data->title}}</a></h5>
                                            <h5><a href="property-1.html" >{{$data->description}}</a></h5>
                                            <h5><a href="property-1.html" >{{$data->price}}</a></h5>
                                            <h5><a href="property-1.html" >{{$data->region}}</a></h5>

                                        </div>

                                    </div>
                                </div>
                                    @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

                <!-- Footer area-->

@include('frontend.partials.footer')








