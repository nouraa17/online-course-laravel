
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="" class="brand-link">
                <i class="fa fa-book me-3"></i>
                <span class="brand-text font-weight-light">Dr. Islam Osama</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{asset ('dashboard_assets/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Islam Osama</a>
                    </div>
                    
                </div>



                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">


                        <li class="nav-item menu-open ">
                            <a href="" class="nav-link bg-primary ">
                                {{-- <i class="nav-icon fas fa-tachometer-alt"></i> --}}
                                <p>
                               Users
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('dashboard.users.index')}}" class="nav-link {{request()->is('dashboard/users/index') ? 'active' : ''}} ">
                                        {{-- <i class="far fa-circle nav-icon"></i> --}}
                                        <p>All Users</p>
                                    </a>
                                </li>


                            </ul>
                        </li>


                    </ul>

                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">

                        <li class="nav-item menu-open">
                            <a href="" class="nav-link bg-primary ">
                                {{-- <i class="nav-icon fas fa-tachometer-alt"></i> --}}
                                <p>
                               Blogs
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('dashboard.blogs.index')}}" class="nav-link {{request()->is('dashboard/blogs/index') ? 'active' : ''}} ">
                                        {{-- <i class="far fa-circle nav-icon"></i> --}}
                                        <p>All Blogs</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('dashboard.blogs.create')}}" class="nav-link {{request()->is('dashboard/blogs/create') ? 'active' : ''}} ">
                                        {{-- <i class="far fa-circle nav-icon"></i> --}}
                                        <p>Create Blog</p>
                                    </a>
                                </li>

                            </ul>
                        </li>


                    </ul>

                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">

                        <li class="nav-item menu-open ">
                            <a href="#" class="nav-link bg-primary">
                                {{-- <i class="nav-icon fas fa-tachometer-alt"></i> --}}
                                <p>
                                    Categories
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="" class="nav-link active">
                                        {{-- <i class="far fa-circle nav-icon"></i> --}}
                                        <p>All Categories</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link">
                                        {{-- <i class="far fa-circle nav-icon"></i> --}}
                                        <p>Create Categories</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item menu-open ">
                            <a href="#" class="nav-link bg-primary">
                                {{-- <i class="nav-icon fas fa-tachometer-alt"></i> --}}
                                <p>
                               Courses
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="" class="nav-link active">
                                        {{-- <i class="far fa-circle nav-icon"></i> --}}
                                        <p>All Courses</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href={{route('dashboard.courses.create')}} class="nav-link">
                                        {{-- <i class="far fa-circle nav-icon"></i> --}}
                                        <p>Create Course</p>
                                    </a>
                                </li>

                            </ul>
                        </li>


                    </ul>



                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
