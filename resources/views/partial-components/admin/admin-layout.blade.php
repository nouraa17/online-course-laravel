
@include('partial-components.admin.admin-head')
@include('partial-components.admin.admin-nav')
@include('partial-components.admin.admin-sidebar')




<div class="content-wrapper">

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">@yield('title')</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>

                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content pl-5">
        <div class="container-fluid">

            <div class="row">

              @yield('content')



            </div>



        </div>
    </section>

</div>

@include('partial-components.admin.admin-footer')

