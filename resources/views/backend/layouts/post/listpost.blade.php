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
        <th >Region</th>
        <th >Sector</th>
        <th >Road</th>
        <th >Plot</th>
        <th >Property image</th>
        <th >Property Doc</th>
        <th>Actions</th>




        </thead>
        <tbody>
        @foreach($post as $data )
            <tr>
                <th scope="row">{{$data->id}}</th>
                <td>{{$data->categoryId}}</td>
                <td>{{$data->authorId}}</td>
                <td>{{$data->status}}</td>

                <td>{{$data->description}}</td>
                <td>{{$data->title}}</td>
                <td>{{$data->price}}</td>
                <td>{{$data->region}}</td>
                <td>{{$data->sector}}</td>
                <td>{{$data->road}}</td>
                <td>{{$data->plot}}</td>


                <td>
                    @foreach($data->image as $key=>$image)
                        <li data-thumb="assets/img/property-1/property1.jpg" style="margin-bottom: 20px">
                            <img src="{{url('images/posts/',$image)}}" height="100px" width="100px" />
                        </li>
                @endforeach
                </td>
                <td>
                        @foreach($data->imageDoc as $key=>$imageDoc)
                            <li data-thumb="assets/img/property-1/property1.jpg" style="margin-bottom: 20px">
                                <img src="{{url('images/documents/',$imageDoc)}}" height="100px" width="100px" />
                            </li>
                @endforeach

                </td>
                <td>

                    <a class="btn btn-danger" href="{{route('post.delete',$data->id)}}">delete</a>
                    <a class="btn btn--blue" href="{{route('post.edit',$data->id)}}">edit</a>
                    <a class="btn btn--green" href="{{route('post.update',$data->id)}}">update</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>







    @stop
