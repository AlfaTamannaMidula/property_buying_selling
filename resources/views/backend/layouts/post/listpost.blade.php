@extends('backend.master')

@section('page')


    <center><a href="{{route('post.form')}}"><button class="btn btn-success">Add Post</button></a></center>

    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif


    <table class="table table-bordered table-hover">
        <thead>
        <th >ID</th>
        <th >Category Id</th>
        <th >User Id</th>
        <th >Status</th>
        <th >Description</th>
        <th >Title</th>
        <th >Price</th>
        <th >Image</th>
        <th >Region</th>
        <th >Sector</th>
        <th >Road</th>
        <th >Plot</th>
        <th >Image</th>



        </thead>
        <tbody>
        @foreach($post as $data )
            <tr>
                <th scope="row">{{$data->id}}</th>
                <td>{{$data->categoryId}}</td>
                <td>{{$data->userId}}</td>
                <td>{{$data->status}}</td>
                <td>{{$data->title}}</td>
                <td>{{$data->description}}</td>
                <td>{{$data->price}}</td>
                <td>{{$data->region}}</td>
                <td>{{$data->sector}}</td>
                <td>{{$data->road}}</td>
                <td>{{$data->plot}}</td>
                <td>{{$data->image}}</td>
                <td>
                    <img style="width: 100px;" src="{{url('/images/post/',$data->image)}}" alt=""> </td>>



                <td>
                    <a class="btn btn-pinterest" href="">update</a>
                    <a class="btn btn--blue" href="{{route('post.delete',$data->id)}}">delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>







    @stop
