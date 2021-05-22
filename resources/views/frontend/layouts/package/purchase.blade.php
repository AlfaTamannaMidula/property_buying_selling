@include('frontend.partials.header')

<br>
<br>
<br>
<br>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
    <div class="wrapper wrapper-content animated fadeInRight">

        <div class="row">

            <div class="col-lg-12">

                <div class="ibox">
                    <div class="ibox-content">

                        <div class="panel-body">

                            <div class="row">
                                <div class="col-md-4">
                                    <h style=" background:blanchedalmond">Payment in Bkash number: <strong>01277777777777</strong> </h>
                                    <br>
                                    <br>
                                    <h style=" background:#c1e2b3">Payment include: <strong>Authenticate land Check</strong> </h>
                                    <br>
                                    <br>
                                    <h2>Details</h2>
                                    <strong>Package Name:</strong>: {{$data->name}} <br>
                                    <strong>Price:</strong>: <span class="text-navy">{{$data->price}}</span><br>
                                    <strong>Number of Packages:</strong>: <span class="text-navy">{{$data->numberofPosts}}</span><br>
                                    <strong> Package Details:</strong>: <span class="text-navy"> {{$data->description}}</span>

                                </div>
                                <div class="col-md-8">

                                    <form role="form" id="payment-form" method="post" action="{{route('purchase.packages.done')}}">
                                        @csrf

                                        <input type="hidden" name="packageId" value="{{$data->id}}">
                                        <input type="hidden" name="packagePrice" value="{{$data->price}}">
                                        <input type="hidden" name="numberofposts" value="{{$data->numberofPosts}}">
                                        <input type="hidden" name="packageName" value="{{$data->name}}">

                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="form-group">
                                                    <label>Amount paid</label>
                                                    <input type="number" class="form-control" name="pricePaid" placeholder="Enter amount you Paid.">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="form-group">
                                                    <label>Transaction Id</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="transactionId" placeholder="Valid Transaction Number" required>
                                                        <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <button class="btn btn-primary" type="submit">Make a payment!</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<br>
<br>
<br>
<br>

@include('frontend.partials.footer')
