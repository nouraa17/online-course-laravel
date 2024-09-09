@extends('general-layout')
@section('title','Blog Details')
@section('custom-style')
    @include('partial-components.blogs.blogs-style')
@endsection
@section('spinner')
    @include('partial-components.layout.spinner')
@endsection
@section('content')

<div class="container mt-5 justify-content-center">

    <div class="row justify-content-center">
        <div class="col-lg-8 mb-3">
            <h2 class="mb-4">د. إسلام أسامة يقدم “أنماط الشخصيات” على ملتقى الدارين</h2>
            <div class="card">
                <img src="{{asset('../imgs/blog-default.jpg')}}" class="card-img-top" alt="Wild Landscape"/>
                <div class="card-body">

                    <div class="card-text ar">
                        استمرارًا للتعاون بين مؤسسة تواصل لغد أفضل وأكاديمية ملتقى الدارين قام د/ إسلام أسامة بتقديم محاضرة بعنوان ((أنماط الشخصيات))
                        فلكل إنسان شخصيه يتميز بها …يتعامل من خلالها مع أحداثه اليومية …هنالك مَن تظهر لنا شخصيتهم وميولهم وأفكارهم بسهولة ..وهناك من لا نستطيع أن نفهمهم ولو بعد حين . فمن أنت من هؤلاء ؟؟؟؟ ومن الآخرون ؟؟؟؟ هذا ما تعرفنا عليه مع دكتور إسلام أسامة وذلك يوم السبت الموافق 8 ديسمبر 2012 الساعة العاشرة مساءً
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
