@include('partial-components.admin.layouts.header')
@include('partial-components.admin.layouts.navbar')
@include('partial-components.admin.layouts.sidebar')

<main class="main">
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item"><a href="#">Admin</a>
        </li>
        <li class="breadcrumb-item active">@yield('title')</li>

    </ol>


    @yield('content')

@include('partial-components.admin.layouts.footer')
