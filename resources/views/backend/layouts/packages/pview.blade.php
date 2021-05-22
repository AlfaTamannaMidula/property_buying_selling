@extends('backend.master')
@section('page')



    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
       Add Package
    </button>

    <!-- Modal -->
    <div class="modal fade " id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Package</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="{{route('package.add')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Package Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="package_name" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Price</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="price" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="dis">Description</label>
                            <textarea  name="description" id="dis"  class="form-control" cols="5" rows="3" ></textarea>
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-control"  name="status" id="status">
                                <option value="Active" selected>Active</option>
                                <option value="Inactive">Inactive</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="dis">Number of Posts</label>
                            <textarea  name="numberofPosts" id="dis"  class="form-control" cols="5" rows="3" ></textarea>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Create Package</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    <table class="table table-bordered hover">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Package Name</th>
            <th scope="col">Package Details</th>
            <th scope="col">Price</th>
            <th scope="col">Status</th>
            <th scope="col">Number of Posts</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($packages as $package )
            <tr>
                <th scope="row">{{$package->id}}</th>
                <td>{{$package->name}}</td>
                <td>{{$package->description}}</td>
                <td>{{$package->price}}</td>
                <td>{{$package->status}}</td>
                <td>{{$package->numberofPosts}}</td>
                <td>{{$package->paymenrStatus}}</td>
            <td>
                <a class="btn btn-pinterest" href="">view</a>
                <a class="btn btn--blue" href="">update</a>
                <a class="btn btn--green" href="{{route('package.delete',$package->id)}}">delete</a>
            </td>
            </tr>

        @endforeach
        </tbody>
    </table>




@endsection
