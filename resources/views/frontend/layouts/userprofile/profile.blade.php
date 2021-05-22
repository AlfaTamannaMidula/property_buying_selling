@include('frontend.partials.header')




<div class="profile-info col-md-12">

    <div class="panel">

        <div class="panel-body bio-graph-info">
            <h1>Bio Graph</h1>
            <div class="row">
                <div class="bio-row">

                    <p><span>Name </span>:{{auth('user')->user()->name}}</p>
                </div>
                <div class="bio-row">
                    <p><span>NID</span>:{{auth('user')->user()->nid}}</p>
                </div>

                <div class="bio-row">
                    <p><span>Address </span>:{{auth('user')->user()->address}} </p>
                </div>
                <div class="bio-row">
                    <p><span>Email </span>:{{auth('user')->user()->email}} </p>
                </div>
                <div class="bio-row">
                    <p><span>Phone Number </span>:{{auth('user')->user()->contact}}</p>
                </div>
                <div class="bio-row">
                    <p><span>Nid Image </span>:<img src="{{url('images/nids/',auth('user')->user()->imageNid)}}" height="100px" width="100px" ></p>
                </div>



            </div>
        </div>
    </div>

</div>

@include('frontend.partials.footer')
