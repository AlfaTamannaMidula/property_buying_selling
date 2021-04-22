@extends('backend.master')

@section('page')
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
        category
    </button>


    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif

    <!-- Modal -->
    <div class="modal fade " id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="{{route('category.create')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Category name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="category_name" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="dis">Description</label>
                            <textarea  name="description" id="dis"  class="form-control" cols="5" rows="3" ></textarea>
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-control"  name="status" id="">
                                <option value="Active" selected>Active</option>
                                <option value="Inactive">Inactive</option>
                            </select>
                        </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Create Category</button>
                </div>
                    </form>
            </div>
        </div>
        </div>
    </div>
    <br>
    <br>

    <table class="table table-bordered hover">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($category as $categories )
        <tr>
            <th scope="row">{{$categories->id}}</th>
            <td>{{$categories->name}}</td>
            <td>{{$categories->description}}</td>
            <td>{{$categories->status}}</td>
            <td>
                <a class="btn btn-pinterest" href="">update</a>
                <a class="btn btn--blue" href="{{route('category.delete',$categories->id)}}">delete</a>
            </td>
        @endforeach
        </tbody>
    </table>

@stop
