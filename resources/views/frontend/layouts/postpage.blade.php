@include('frontend.partials.header')
<!-- property area -->
<div class="properties-area recent-property" style="background-color: #FFF;">
    <div class="container">
        <div class="row">

            <div class="col-md-9  pr0 padding-top-40 properties-page">


                <div class="content-area recent-property" style="background-color: #FCFCFC; padding-bottom: 55px;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">


                                <!-- /.feature title -->
                                <div class="content-area recent-property" style="background-color: #FCFCFC; padding-bottom: 55px;">
                                    <div class="container">

                                        <div class="row">
                                            <div class="proerty-th">
                                                @foreach($allpost as $data)
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
                </div>
            </div>
        </div>
    </div>
                    <!-- Footer area-->




@include('frontend.partials.footer')
