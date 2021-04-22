@extends('backend.master')
@section('page')

    <center><a href="{{route('admin.form')}}"><button class="btn btn-success">Add Admin</button></a></center>




    <table class="table table-bordered table-hover">
        <thead>
        <th >ID</th>
        <th >Name</th>
        <th >Email</th>
        <th >Contact</th>
        <th >Address</th>
        <th>Status</th>
        <th >Role</th>
        <th >Action</th>

        </thead>
        <tbody>
        @foreach($adminlist as $adminlists )
            <tr>
                <th scope="row">{{$adminlists->id}}</th>
                <td>{{$adminlists->name}}</td>
                <td>{{$adminlists->email}}</td>
                <td>{{$adminlists->contact}}</td>
                <td>{{$adminlists->address}}</td>
                <td>{{$adminlists->status}}</td>
                <td>{{$adminlists->role}}</td>



                <td>
                    <a class="btn btn-pinterest" href="">update</a>
                    <a class="btn btn--green" href="">delete</a>

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>





@endsection
