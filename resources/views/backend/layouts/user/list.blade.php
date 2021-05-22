@extends('backend.master')
@section('page')


       <center><a href="{{route('user.form')}}"><button class="btn btn-success">Add User</button></a></center>


       @if(session()->has('success'))
           <div class="alert alert-success">
               {{ session()->get('success') }}
           </div>
       @endif

       <table class="table table-bordered table-hover">
           <thead>
               <th >ID</th>
               <th >Name</th>
               <th >Email</th>
               <th >Contact</th>
               <th >NID</th>
               <th >Address</th>
               <th>Status</th>
               <th >Role</th>
               <th >Package Id</th>
               <th >NID Image</th>
           </thead>
           <tbody>
           @foreach($user as $data )
               <tr>
                   <th scope="row">{{$data->id}}</th>
                   <td>{{$data->name}}</td>
                   <td>{{$data->email}}</td>
                   <td>{{$data->contact}}</td>
                   <td>{{$data->nid}}</td>
                   <td>{{$data->address}}</td>
                   <td>{{$data->status}}</td>
                   <td>{{$data->role}}</td>
                   <td>{{$data->packageId}}</td>

                   <td>
                           <li data-thumb="assets/img/property-1/property1.jpg" style="margin-bottom: 20px">
                               <img src="{{url('images/nids/',$data->imageNid)}}" height="100px" width="100px" />
                           </li>

                   </td>
                   <td>
                       <a class="btn btn-pinterest" href="">update</a>
                       <a class="btn btn--blue" href="{{route('user.delete',$data->id)}}">delete</a>
                   </td>
               </tr>
           @endforeach
           </tbody>
       </table>


  {{$user->links()}}






@endsection
