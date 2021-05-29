@extends('backend.master')

@section('page')

    <h1>Payment Report</h1>

    <form action="{{route('payment.report')}}" method="GET">

        <div class="row">
            <div class="col-md-8">
                <div class="row">

                    <div class="form-group col-md-6">
                        <label for="from"> Date from:</label>
                        <input value="{{$fromDate}}" id="from" type="date" class="form-control" name="from_date">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="to"> Date to:</label>
                        <input value="{{$toDate}}" id="to" type="date" class="form-control" name="to_date">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Search</button>
                    <button type="button" onclick="printDiv()" class="btn btn-success">Print</button>
                </div>
            </div>

        </div>
    </form>

    <div id="printArea">
        <h4>Payment Report from {{$fromDate}} to {{$toDate}}</h4>
        <table class="table">
            <thead>
            <tr>
                <th>Id</th>
                <th>User Id</th>
                <th>User Name</th>
                <th>Package Id</th>
                <th>Package Name</th>
                <th>Amount Paid</th>
                <th>Payment Date</th>
                <th>Approved By</th>


            </tr>
            </thead>
            <tbody>
            @if(count($allpayment)>0)
                @foreach($allpayment as $data)
                    <tr>
                        <th scope="row"> {{$data->id}}</th>
                        <td> {{$data->userId}}</td>
                        <td>{{$data->userName}} </td>
                        <td>{{$data->packageId}} </td>
                        <td> {{$data->packageName}}</td>
                        <td> {{$data->amount}}</td>
                        <td> {{$data->paymentDate}}</td>
                        <td> {{$data->approvedBy}}</td>


                    </tr>

                @endforeach
            @else
                <tr>
                    <td colspan="">
                        <h2 style="color: red">No data found!.</h2>
                    </td>
                </tr>

            @endif
            </tbody>

        </table>
    </div>

    <script type="text/javascript">
        function printDiv(){
            var printContents = document.getElementById("printArea").innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;
            window.print();

            document.body.innerHTML = originalContents;

        }
    </script>
















@stop
