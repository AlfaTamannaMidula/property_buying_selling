@include('frontend.partials.header')



<div class="content-area single-property" style="background-color: #FCFCFC;">&nbsp;

    <div class="fixed-top">

        <div class="col-xs-offset-8 col-sm-offset-8 dealer-face">
            <h3 class="pull-right">
                Are you interested in this property? than click here to connect with user.
                @auth('user')
                    @if($checkPost)
                        <p>Already interested</p>
                    @else
                        <a href="{{route('post.interest',$postdetail->id)}}" ><button class="btn btn-success">Interest</button></a>
                    @endif
                @else
                    <a href="{{route('post.interest',$postdetail->id)}}" ><button class="btn btn-success">Interest</button></a>
                @endauth
                <br>
                <br>

            </h3>


        </div>
    </div>
    <div class="container">

        <div class="fixed-top" >

            <span class="property-info-entry">
                                <h4 class="s-property-title">Title</h4>
                                        <span class="property-info-label" >{{$postdetail->title}}</span>

                                    </span>

            <br>

            <div class="col-md-8 single-property-content prp-style-1 ">
                <div class="row">
                    <div class="light-slide-item">
                        <div class="clearfix">

                            <div class="favorite-and-print">
                                <a class="add-to-fav" href="" data-toggle="modal">
                                    <i class="fa fa-star-o"></i>
                                </a>
                                <a class="printer-icon " href="javascript:window.print()">
                                    <i class="fa fa-print"></i>
                                </a>
                            </div>

                            <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
                                @foreach($postdetail->image as $key=>$image)
                                <li data-thumb="assets/img/property-1/property1.jpg" style="margin-bottom: 20px">
                                    <img src="{{url('images/posts/',$image)}}" height="300px" width="400px" />
                                </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                </div>

                <br>

                <div class="single-property-wrapper">
                    <div class="single-property-header">
                        <h1 class="property-title pull-left">Price</h1>

                        <span class="property-price pull-right">{{$postdetail->price}}</span>
                    </div>

                    <div class="property-meta entry-meta clearfix ">

                        <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">

                            <span class="property-info-entry">
                                <h4 class="s-property-title">Status</h4>
                                        <span class="property-info-label" >{{$postdetail->status}}</span>

                                    </span>
                        </div>

                        <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">

                            <span class="property-info-entry">
                                <h4 class="s-property-title">Region</h4>
                                        <span class="property-info-label" >{{$postdetail->region}}</span>

                                    </span>


                    </div>

                        <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">

                            <span class="property-info-entry">
                                <h4 class="s-property-title">Sector</h4>
                                        <span class="property-info-label" >{{$postdetail->sector}}</span>

                                    </span>


                        </div><div class="col-xs-6 col-sm-3 col-md-3 p-b-15">

                            <span class="property-info-entry">
                                <h4 class="s-property-title">Road</h4>
                                        <span class="property-info-label" >{{$postdetail->road}}</span>

                                    </span>

                        </div>
                        <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">

                            <span class="property-info-entry">
                                <h4 class="s-property-title">Plot</h4>
                                        <span class="property-info-label" >{{$postdetail->plot}}</span>

                                    </span>

                        </div>
                        <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">

                            <span class="property-info-entry">
                                <h4 class="s-property-title">longitude</h4>
                                        <span class="property-info-label" >{{$postdetail->longitude}}</span>

                                    </span>



                        </div>
                        <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">

                            <span class="property-info-entry">
                                <h4 class="s-property-title">latitude</h4>
                                        <span class="property-info-label" >{{$postdetail->latitude}}</span>

                                    </span>



                        </div>
                    <!-- .property-meta -->

                    <div class="section">
                        <h4 class="s-property-title">description</h4>
                        <div class="property-info-value">{{$postdetail->description}}

                        </div>
                    </div>
                    <!-- End description area  -->


                    <div class="section property-video">

                        <div class="video-thumb">
                            <a class="video-popup" href="yout" title="Virtual Tour">
                                <img src="assets/img/property-video.jpg" class="img-responsive wp-post-image" alt="Exterior">
                            </a>
                        </div>
                    </div>
                    <!-- End video area  -->

                </div>
            </div>
        </div>

</div>
    </div>


@include('frontend.partials.footer')
