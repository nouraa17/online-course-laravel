<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="/" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>Dr. Islam Osama</h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <div class="nav-item nav-link py-0 pt-3">
                <!-- <form class="position-relative" role="search" style="min-width: 20vw;">
                    <input class="form-control small-screen" type="search"
                        placeholder="What do you want to learn?" aria-label="Search">
                    <button class="position-absolute small-screen top-0 end-0 rounded btn btn-success"
                        type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form> -->
            </div>
            <a href="/" class="nav-item nav-link">Home</a>
            <a href="/about" class="nav-item nav-link">About</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                <div class="dropdown-menu fade-down m-0">
                    <a href="/courses" class="dropdown-item">Online Courses</a>
                    <a href="#" class="dropdown-item">Meeting</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu fade-down m-0">
                    <a href="/blogs" class="dropdown-item active">Blogs</a>
                    <a href="/instructor" class="dropdown-item">Dr. Islam</a>
                    <a href="/testimonial" class="dropdown-item">Testimonial</a>
{{--                    <a href="404.html" class="dropdown-item">404 Page</a>--}}
                </div>
            </div>
            <a href="/contact" class="nav-item nav-link">Contact</a>
        </div>
        @guest()
            <a href="/login" class="btn text-primary py-4 px-lg-2 d-none d-lg-block mx-2">Login</a>
            <a href="/register" class="btn btn-primary py-4 px-lg-4 d-none d-lg-block">Join Now<i class="fa fa-arrow-right ms-3"></i></a>
        @endguest
        @auth()
            <a href="/logout" class="btn text-primary py-4 px-lg-2 d-none d-lg-block mx-2">Logout</a>
        @endauth
    </div>
</nav>
