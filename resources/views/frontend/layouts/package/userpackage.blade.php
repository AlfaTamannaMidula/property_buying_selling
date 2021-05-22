@include('frontend.partials.header')





    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif

    <h3 class="bg-info">Your Purchased Packages:</h3>
    <br>
    <br>
    <table class="table  table-bordered table-hover  ">
        <thead>

        <th>Package Name</th>
        <th>No of Posts</th>
        <th>Price</th>
        <th>Paid Amount</th>
        <th>TransactionId</th>
        <th>current_package_status</th>
        <th>status</th>
        <th>Action</th>
        </thead>
        <tbody>
        @foreach($userpurchase as $data)
            <tr>
                <td> {{$data->packageName}}</td>
                <td> {{$data->numberOfPosts}}</td>
                <td> {{$data->package_price}}</td>
                <td> {{$data->amountToPay}}</td>
                <td> {{$data->transactionId}}</td>
                <td>{{$data->current_package_status}}</td>
                <td> {{$data->status}}</td>
                <td>
                    @if($data->status=='Approved'||$data->current_package_status=='expired')
                        <p style="background-color: red; display: inline-block">no action</p>@else
                        <a class="btn btn-info" href="#">Cancel</a>
                    @endif
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>


<!-- property area -->
<div class="properties-area recent-property" style="background-color: #FFF;">
    <div class="container">
        <div class="row">

            <div class="col-md-9  pr0 padding-top-40 properties-page">
                <div class="col-md-12 clear">



                </div>

                <div class="content-area recent-property" style="background-color: #FCFCFC; padding-bottom: 55px;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">


                                <!-- /.feature title -->
                                <div class="content-area recent-property" style="background-color: #FCFCFC; padding-bottom: 55px;">
                                    <div class="container">

                                        <div class="row">
                                            <div class="proerty-th">
                                                @foreach($packages as $data )
                                                    <div class="col-sm-6 col-md-3 p0"  style="background-color: #f0ad4e; padding-bottom: 25px;">
                                                        <div class="box-two proerty-item">
                                                            <div class="item-thumb">

                                                            </div>
                                                            <div class="item-entry overflow">
                                                                <h5><a href="property-1.html" >{{$data->id}}</a></h5>
                                                                <h5><a href="property-1.html" >{{$data->name}}</a></h5>
                                                                <h5><a href="property-1.html" >{{$data->description}}</a></h5>
                                                                <h5><a href="property-1.html" >{{$data->price}}</a></h5>
                                                                <h5><a href="property-1.html" >{{$data->numberofPost}}</a></h5>


                                                            </div>
                                                            <a href="{{route('purchase.package',$data->id)}}"><button class="btn btn-success">Purchase</button></a>
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
