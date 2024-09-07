@extends('general-layout')
@section('title','Contact')

@section('content')

<main style="min-height: 90vh">
    <div class="container mt-5 mb-3">
        <h2 class="mb-3 fw-semibold">My Learning</h2>
    </div>
    <article class="py-2">
        <div class="container">
            <div class="row bg-light course-item my-3">
                <div class="col-md-4">
                    <a href="#" class="position-relative d-block m-2" style="min-height: 270px;">
                        <img src="imgs/pexels-pixabay-414628.jpg" class="image-center rounded-3"
                            alt="">
                    </a>
                </div>
                <div class="col-md-5 d-flex flex-column justify-content-evenly">
                    <div class="mx-1">
                        <h5 class="fw-semibold">
                            <a href="#" class="link-dark text-decoration-none">Data Science Course</a>
                        </h5>

                        <p class="fs-6 text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Blanditiis, molestiae. Illo, nulla nobis debitis autem dolo...</p>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                      </div>
                </div>
                <div class="col-md-3 py-3 bg-light rounded-end-3 d-flex flex-column justify-content-center align-items-center border-start position-relative">
                    <a href="course.html" class="btn btn-primary p-2 fw-bold px-4">Go to Course <i class="fa-solid fa-arrow-right"></i></a>
                    <!-- <a href="" class="fw-bold mt-2 text-decoration-none">Push end date</a> -->
                    <a class="fa-solid fa-ellipsis-vertical link-dark position-absolute top-0 end-0 m-3 fs-4" href="#"></a>
                </div>
            </div>
            <div class="row bg-light course-item my-3">
                <div class="col-md-4">
                    <a href="#" class="position-relative d-block m-2" style="min-height: 270px;">
                        <img src="imgs/pexels-polina-tankilevitch-4443160.jpg" class="image-center rounded-3"
                            alt="">
                    </a>
                </div>
                <div class="col-md-5 d-flex flex-column justify-content-evenly">
                    <div class="mx-1">
                        <h5 class="fw-semibold">
                            <a href="" class="link-dark text-decoration-none">Data Science Course</a>
                        </h5>

                        <p class="fs-6 text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Blanditiis, molestiae. Illo, nulla nobis debitis autem dolo...</p>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 5%;" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100">5%</div>
                      </div>
                </div>
                <div class="col-md-3 py-3 bg-light rounded-end-3 d-flex flex-column justify-content-center align-items-center border-start position-relative">
                    <a href="course.html" class="btn btn-primary p-2 fw-bold px-4">Go to Course <i class="fa-solid fa-arrow-right"></i></a>
                    <!-- <a href="" class="fw-bold mt-2 text-decoration-none"><i class="fa-solid fa-triangle-exclamation text-warning fs-5 me-2"></i>Push end date</a> -->
                    <a class="fa-solid fa-ellipsis-vertical link-dark position-absolute top-0 end-0 m-3 fs-4" href="#"></a>
                </div>
            </div>
        </div>
    </article>
</main>

@endsection
