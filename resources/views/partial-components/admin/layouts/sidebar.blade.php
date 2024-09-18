<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="index.html"><i class="icon-speedometer"></i> Dashboard <span class="tag tag-info">NEW</span></a>
            </li>
            <li class="nav-title">
                DB Elements
            </li>

            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="fa fa-users "></i> Users</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('dashboard.users.index')}}"><i class="icon-star"></i> All Users</a>
                    </li>

                </ul>
            </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="fa fa-book "></i> Blogs</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link {{request()->is('dashboard/blogs/index') ? 'active' : ''}}" href="{{route('dashboard.blogs.index')}}"><i class="icon-star"></i> All Blogs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{request()->is('dashboard/blogs/create') ? 'active' : ''}}" href="{{route('dashboard.blogs.create')}}"><i class="fa fa-plus-square "></i> Create Blog</a>
                    </li>
                </ul>
            </li>

        </ul>
    </nav>
</div>
