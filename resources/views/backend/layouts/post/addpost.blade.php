@extends('master')
@section('page')
    <div class="modal-body">

        <form action="{{route('post.add')}}" method="post" enctype="multipart/form-data">
            @csrf

            <!DOCTYPE html>
            <html lang="en">

            <head>
                <!-- Required meta tags-->
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <meta name="description" content="Colorlib Templates">
                <meta name="author" content="Colorlib">
                <meta name="keywords" content="Colorlib Templates">

                <!-- Title Page-->
                <title>Au Register Forms by Colorlib</title>


            </head>

            <body>
            <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
                <div class="wrapper wrapper--w790">
                    <div class="card card-5">
                        <div class="card-heading">
                            <h2 class="title">Post Form</h2>
                        </div>
                        <div class="card-body">
                            <div class="form-row">
                                <div class="name">Post Title</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="text" name="posttitle">
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="name">Description</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="text" name="description">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name">Image</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-4" type="file" name="image">
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="name">Price</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="text" name="price">
                                    </div>
                                </div>
                            </div>

                                    <div class="form-row ">
                                        <div class="name">Address</div>
                                        <div class="value">
                                            <div class="row row-space">
                                                <div class="col-3">
                                                    <div class="input-group-desc">
                                                        <input class="input--style-5" type="text" name="region">
                                                        <label class="label--desc">Region</label>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="input-group-desc">
                                                        <input class="input--style-5" type="text" name="sector">
                                                        <label class="label--desc">Sector</label>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="input-group-desc">
                                                        <input class="input--style-5" type="text" name="road">
                                                        <label class="label--desc">road</label>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="input-group-desc">
                                                        <input class="input--style-5" type="text" name="plot">
                                                        <label class="label--desc">Plot</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                            <div class="form-row">
                                <div class="name">Caterogy Id</div>
                                <div class="value">
                                    <div class="input-group">
                                        <div class="rs-select2 js-select-simple select--no-search">
                                            <select name="categoryId">
                                                @foreach($category as $cat)
                                                    <option selected="selected" value="{{($cat->id)}}">{{($cat->name)}}</option>
                                                @endforeach
                                            </select>
                                            <div class="select-dropdown"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="name">Status</div>
                                <div class="value">
                                    <div class="input-group">
                                        <div class="rs-select2 js-select-simple select--no-search">
                                            <select name="status">
                                                <option selected="selected" value="active">Active</option>
                                                <option value="inactive">Inactive</option>

                                            </select>
                                            <div class="select-dropdown"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div>
                                <button class="btn btn--radius-2 btn--red" type="submit">Add Post</button>
                            </div>
        </form>
    </div>
    </div>
    </div>
    </div>


    </body><!-- This templates was made by Colorlib (https://colorlib.com) -->

    </html>
    <!-- end document-->




@endsection
