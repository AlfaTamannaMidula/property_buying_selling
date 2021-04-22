@extends('backend.master')
@section('page')
    <div class="modal-body">

        <form action="{{route('add.admin')}}" method="post">
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
                            <h2 class="title">User Form</h2>
                        </div>
                        <div class="card-body">
                            <form method="POST">
                                <div class="form-row m-b-55">
                                    <div class="name" style="...">Name</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="text" name="name">

                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name">Address</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="text" name="address">
                                        </div>
                                    </div>
                                </div>


                                <div class="form-row">
                                    <div class="name">Email</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="email" name="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name">Password</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="password" name="password">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row m-b-55">
                                    <div class="name">Contact</div>
                                    <div class="value">
                                        <div class="row row-refine">

                                            <div class="col-9">
                                                <div class="input-group-desc">
                                                    <input class="input--style-5" type="text" name="contact">
                                                    <label class="label--desc">Phone Number</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name">Role</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <select name="role">
                                                    <option selected="selected" value="Admin">Admin</option>
                                                    <option value="Super Admin">Super Admin</option>

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
                                                    <option selected="selected" value="Active">Active</option>
                                                    <option value="Inactive">Inactive</option>

                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div>
                                    <button class="btn btn--radius-2 btn--red" type="submit">Add Admin</button>
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
