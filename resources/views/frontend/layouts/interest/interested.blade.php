@include('frontend.partials.header')
<section
    class="ftco-section bg-light">
    <div class="container">
        <div class="row">

            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
            <br>
            <br>
            <h>Request Table</h>

            <table class="table  table-bordered table-hover  ">
                <thead>

                <th>Author Name</th>
                <th>Post Title</th>
                <th>Remarks</th>
                <th>My Contact</th>
                <th>Author Contact</th>
                <th>status</th>
                <th>Action</th>
                </thead>
                <tbody>


                @foreach($interestedPosts as $interests)


                    <tr>
                        <td>{{$interests->interestPosts->authorName}} </td>
                        <td>{{$interests->interestPosts->title}} </td>
                        <td>{{$interests->remarks}} </td>
                        <td>@if(!auth('user')->user()->contact) Pleas add you contact
                            @else {{auth('user')->user()->contact}}
                            @endif </td>
                        <td>@if($interests->status=='pending'||$interests->status=='Disapproved')
                                You will get Author contact,if approved @else{{$interests->postAuthorContact}}
                            @endif</td>
                        </td>
                        <td> {{$interests->status}} </td>
                        <td>@if($interests->status=='pending')
                                <a class="btn btn-info" href="{{route('delete.request',$interests->id)}}">Delete</a>
                            @else <p style="background: red">No Action neeeded.</p>
                            @endif

                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>

            <div class="properties-area recent-property" style="background-color: #FFF;">
                <div class="container">


                    <div class="content-area recent-property" style="background-color: #FCFCFC; padding-bottom: 55px;">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">


                                    <!-- /.feature title -->
                                    <div class="content-area recent-property"
                                         style="background-color: #FCFCFC; padding-bottom: 55px;">
                                        <div class="container">

                                            <div class="row">
                                                <div class="proerty-th">
                                                    @foreach($allpost as $data)
                                                        <div class="col-sm-6 col-md-3 p0">
                                                            <div class="box-two proerty-item">
                                                                <div class="item-thumb">
                                                                    <a target="_blank"
                                                                       href="{{route('post.all',$data->id)}}"><img
                                                                            src="{{url('images/posts/',$data->image[array_key_first($data->image)])}}"
                                                                            style="width:auto;"></a>
                                                                </div>
                                                                <div class="item-entry overflow">
                                                                    <h5><a href="property-1.html">{{$data->id}}</a></h5>
                                                                    <h5><a href="property-1.html">{{$data->title}}</a>
                                                                    </h5>
                                                                    <h5>
                                                                        <a href="property-1.html">{{$data->description}}</a>
                                                                    </h5>
                                                                    <h5><a href="property-1.html">{{$data->price}}</a>
                                                                    </h5>
                                                                    <h5><a href="property-1.html">{{$data->region}}</a>
                                                                    </h5>

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
    </div>
</section>

                        <!-- Footer area-->


                        <br>
                        <br>

                        <br>
                        <br>

                        <br>

                        <br>
                        <br>
                        <br>

@include('frontend.partials.footer')
