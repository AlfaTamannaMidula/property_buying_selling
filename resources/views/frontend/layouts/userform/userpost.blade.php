@include('frontend.partials.header')


<!-- property area -->
<div class="properties-area recent-property" style="background-color: #FFF;">
    <div class="container">
        <div class="row">

            <div class="col-md-9  pr0 padding-top-40 properties-page">
                <div class="col-md-12 clear">
                    <div class="col-xs-10 page-subheader sorting pl0">
                        <ul class="sort-by-list">
                            <li class="active">
                                <a href="javascript:void(0);" class="order_by_date" data-orderby="property_date" data-order="ASC">
                                    Property Date <i class="fa fa-sort-amount-asc"></i>
                                </a>
                            </li>
                            <li class="">
                                <a href="javascript:void(0);" class="order_by_price" data-orderby="property_price" data-order="DESC">
                                    Property Price <i class="fa fa-sort-numeric-desc"></i>
                                </a>
                            </li>
                        </ul><!--/ .sort-by-list-->

                        <div class="items-per-page">
                            <label for="items_per_page"><b>Property per page :</b></label>
                            <div class="sel">
                                <select id="items_per_page" name="per_page">
                                    <option value="3">3</option>
                                    <option value="6">6</option>
                                    <option value="9">9</option>
                                    <option selected="selected" value="12">12</option>
                                    <option value="15">15</option>
                                    <option value="30">30</option>
                                    <option value="45">45</option>
                                    <option value="60">60</option>
                                </select>
                            </div><!--/ .sel-->
                        </div><!--/ .items-per-page-->
                    </div>

                    <div class="col-xs-2 layout-switcher">
                        <a class="layout-list" href="javascript:void(0);"> <i class="fa fa-th-list"></i>  </a>
                        <a class="layout-grid active" href="javascript:void(0);"> <i class="fa fa-th"></i> </a>
                    </div><!--/ .layout-switcher-->
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
                                                @foreach($posts as $data)
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












