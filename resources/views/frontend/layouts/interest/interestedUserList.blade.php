@include('frontend.partials.header')
<section
    class="fa-exclamation-triangle">
    <div class="container">
        <div class="row">
<h>Request Table</h>

<table class="table  table-bordered table-hover  ">
    <thead>

    <th>User Id</th>
    <th>Post Id</th>
    <th>Remarks</th>
    <th>User Contact</th>
    <th>Your Contact</th>
    <th>status</th>
    <th>Action</th>
    </thead>
    <tbody>





    @foreach($interestedUsers as $datas)
        <tr>
            <td> {{$datas->userinterest->name}}</td>
            <td> {{$datas->postInterests->title}}</td>
            <td> {{$datas->remarks}}</td>
            <td>@if($datas->status=='pending'||$data->status=='Disapproved')
                    Accept to see contact @else{{$datas->userContact}}
                @endif</td>
            <td>@if(!auth('user')->user()->contact)
                    Please Add contact
                @else {{auth('user')->user()->contact}} @endif
            </td>
            <td> {{$datas->status}}</td>
            <td>
                <a class="btn-outline-success" href="{{route('approve.request',[$datas->id,$approve='approve'])}}">Approve</a>
                <a class=" btn-outline-light" href="{{route('approve.request',[$datas->id,$approve='disapprove'])}}">Disapprove</a>
            </td>
        </tr>
    @endforeach

    </tbody>
</table>



<h>Approved Users Table</h>

<table class="table  table-bordered table-hover  ">
    <thead>

    <th>User Id</th>
    <th>Post Id</th>
    <th>Remarks</th>
    <th>User Contact</th>

    <th>status</th>
    <th>Action</th>
    </thead>
    <tbody>




    @if($approvedUsers)
        @foreach($approvedUsers as $dat)
            <tr>
                <td> {{$dat->userinterest->name}}</td>
                <td> {{$dat->postinterest->title}}</td>
                <td> {{$dat->remarks}}</td>
                <td>@if($dat->status=='pending'||$dat->status=='Disapproved')
                        Accept to see contact @else{{$dat->userContact}}
                    @endif</td>

                <td> {{$dat->status}}</td>
                <td>
                    <a class="btn-outline-ligh" href="{{route('approve.request',[$dat->id,$approve='disapprove'])}}">Disapprove</a>
                </td>
            </tr>
        @endforeach

    @else

        <h style="background: red; text-align: center; font-size: 2rem;">No Disapproved User</h>
    @endif
    </tbody>
</table>


<h>Disapproved Users Table</h>

<table class="table  table-bordered table-hover  ">
    <thead>

    <th>User Id</th>
    <th>Post Id</th>
    <th>Remarks</th>
    <th>User Contact</th>

    <th>status</th>
    <th>Action</th>
    </thead>
    <tbody>




    @if($disapprovedUsers)
        @foreach($disapprovedUsers as $da)
            <tr>
                <td> {{$da->userinterest->name}}</td>
                <td> {{$da->postinterest->title}}</td>
                <td> {{$da->remarks}}</td>
                <td>@if($da->status=='pending'||$da->status=='Disapproved')
                        Accept to see contact @else{{$da->userContact}}
                    @endif</td>

                <td> {{$da->status}}</td>
                <td>
                    <a class="btn-outline-success" href="{{route('approve.request',[$da->id,$approve='approve'])}}">Approve</a>
                </td>
            </tr>
        @endforeach

    @else

        <h style="background: red; text-align: center; font-size: 2rem;">No approved User</h>
    @endif
    </tbody>
</table>
            </div>
    </div>
    </section>

<br>
<br>
<br>
<br>
<br>
<br>


@include('frontend.partials.footer')
