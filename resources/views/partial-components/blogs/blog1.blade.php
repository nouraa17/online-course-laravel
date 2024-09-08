@extends('general-layout')
@section('title','Blog Details')

@section('content')

<div class="container mt-5 justify-content-center">

    <div class="row justify-content-center">
        <div class="col-lg-8 mb-3">
            <h2 class="mb-4">“فكرة” تكرم د. إسلام أسامة بجامعة حلوان</h2>
            <div class="card">
                <img src="../imgs/دكتور-إسلام-أسامة-جامعة-حلوان-3-22-1200x900.jpg" class="card-img-top" alt="Wild Landscape"/>
                <div class="card-body">

                    <div class="card-text ar">

                    </div>
                    <p class="card-text">
                        <small class="text-muted">Posted by admin</small>
                    </p>
                </div>
            </div>
        </div>
    </div>


    <div class="row mt-5 justify-content-center">


        <div class="col-lg-8">
            <h3>0 Comments</h3>
            <p>leave a comment</p>
            <form  >

                <!-- Message input -->
                <div data-mdb-input-init class="form-outline mb-4">
                  <textarea class="form-control bg-light" placeholder="Enter your comment here" id="form4Example3" rows="5"></textarea>
                  <!-- <label class="form-label" for="form4Example3"> Enter your comment here</label> -->
                </div>



                <!-- Submit button -->
                <button data-mdb-ripple-init type="button" class=" w-25 btn btn-primary btn-block mb-4">Send</button>
              </form>
        </div>
    </div>
</div>

@endsection
