<div class="nav-left-sidebar sidebar-dark">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">
                    <li class="nav-divider">
                        Menu
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="{{route('dashboard')}}"       ><i class="fa fa-fw fa-user-circle"></i>Dashboard <span class="badge badge-success">6</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('category.view')}}" ><i class="fa fa-fw fa-rocket"></i>categories</a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-fw fa-chart-pie"></i>Posts</a>
                        <div id="submenu-3" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('post.form')}}">create post</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('post.view')}}">view post</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fab fa-fw fa-wpforms"></i>User</a>
                        <div id="submenu-4" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('user.form')}}">Add user</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('user.view')}}">View user</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu" aria-controls="submenu-4"><i class="fab fa-fw fa-wpforms"></i>Admin</a>
                        <div id="submenu" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('admin.list')}}">Add admin</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('admin.form')}}">View admin</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('adminlogin.view')}}">Login</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('package.view')}}" ><i class="fab fa-fw fa-wpforms"></i>Packages</a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fas fa-fw fa-table"></i>Payment</a>
                        <div id="submenu-5" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                <li><a href="{{route('purchase.request.list')}}">Purchase Request</a></li>
                                <li><a href="{{route('purchase.history')}}">Purchase History</a></li>
                                <li><a href="{{route('disapprove.purchase')}}">Purchase Disapproved</a></li>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/data-tables.html"></a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
