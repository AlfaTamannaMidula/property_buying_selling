@include('frontend.partials.header')




<!-- register-area -->


<div class="register-area" style="background-color: rgb(249, 249, 249);">
    <div class="container">


        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
            @endforeach
        @endif


        <div class="col-md-6">
            <div class="box-for overflow">
                <div class="col-md-12 col-xs-12 register-blocks">
                    <h2>New account : </h2>
                    <form action="{{route('registration')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input  name="name" type="text" required class="form-control" id="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input  name="email" type="text" required class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input  name="password" type="password" required class="form-control" id="password">
                        </div>
                        <div class="form-group">
                            <label for="password">NID</label>
                            <input  name="nid" type="text" required class="form-control" id="nid">
                        </div>


                        <div class="form-group">
                            <label for="password">Address</label>
                            <input  name="address" type="text" required class="form-control" id="address">
                        </div>
                        <div class="form-group">
                            <label for="password">Contact</label>
                            <input  name="contact" type="text" required class="form-control" id="contact">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="name">NID Image</label>
                            <div class="input-group">
                                <input class="input--style-4" required type="file" name="imageNidkoi">
                            </div>
                        </div>
                        <br>

                        <div class="form-row">
                            <div class="name">Role</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="role">
                                            <option selected="selected" value="Buyer">Buyer</option>
                                            <option value="Seller">Seller</option>

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
                        <div class="text-center">
                            <button type="submit" class="btn btn-default">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="box-for overflow">
                <div class="col-md-12 col-xs-12 login-blocks">
                    <h2>Login : </h2>
                    <form action="{{route('login')}}" method="post">
                        @csrf

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input  name="email" type="text" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input  name="password" type="password" class="form-control" id="password">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-default"> Log in</button>
                        </div>
                    </form>

                </div>

            </div>
        </div>

    </div>
</div>



@include('frontend.partials.footer')















