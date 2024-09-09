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
            <h2 class="mb-4">اليوم “الحلم والأمل” مع د. إسلام أسامة بالهلال الأحمر</h2>
            <div class="card">
                <img src="{{asset('../imgs/blog-default.jpg')}}" class="card-img-top" alt="Wild Landscape"/>
                <div class="card-body">

                    <div class="card-text ar">
                        <p>تقوم مؤسسة تواصل لغد أفضل ومن خلال فريق تواصل للتنمية البشرية بالتعاون مع الهلال الأحمر المصري من خلال عدد عشر مراكز تدريب منتشرة في أنحاء جمهورية مصر العربية , بتنظيم مجموعة من الدورات التدريبية فى مجال التنمية البشرية ، تستهدف هذه الدورات جميع الفئات (طلبة المدارس والجامعات ـ شباب النوادي ـ الموظفون والعاملون بالشركات والمصانع والبنوك … الخ)</p>
                        <p>تتيح هذه الدورات تدريباً مكثفاً لكافة الأفراد يتراوح ما بين يوم إلى أسبوع ، وتعتمد مادة التدريب على جزأين هما التدريب النظري والتدريب العملي، ومن أهم الموضوعات التي يتم التدريب عليها:</p>
                        <p>1- التفكير الإيجابي</p>
                        <p>2- الخرائط الزهنية</p>
                        <p>3- إداراة وتنظيم الوقت</p>
                        <p>4- مهارات التخطيط</p>
                        <p>5- مهارات القيادة</p>
                        <p>6- مبادئ التواصل والاتصال</p>
                        <p>تبدأ الثلاثاء الموافق 18 ديسمبر من خلال ورشة عمل (يوم واحد) تحت عنوان “الحلم والأمل” وذلك بفرع نادى الهلال الأحمر (فرع زينهم) فى تمام الساعه الخامسة مساءاً</p>
                        <br>
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
