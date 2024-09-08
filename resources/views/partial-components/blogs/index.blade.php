@extends('general-layout')
@section('title','Blogs')

@section('content')
<div class="container justify-content-center mt-5">

    <!-- latest blog -->
      <div class="text-center mb-5">
          <h1 >Latest from our blog</h1>
          <p class="text-secondary">Exploring the cutting-edge insights and updates on our blog</p>
      </div>

      <div class=" row d-grid d-lg-flex justify-content-center" style="direction: rtl;">
          <div class=" col-lg-3 col-md-6 col-sm-12">
              <div class="card mb-3 mb-lg-0" style="width: 17rem; min-height: 22rem; position: relative;">
                  <a href="blogs/blog1">
                      <img src="{{asset('imgs/دكتور-إسلام-أسامة-جامعة-حلوان-3-22-1200x900.jpg')}}" class="blog-image card-img-top" alt="...">
                  </a>
                  <div class="card-body">
                      <h5 class="card-title text-dark">“فكرة” تكرم د. إسلام أسامة بجامعة حلوان</h5>
                      <a href="blogs/blog1" class="read-btn btn border-none btn-success" style="float: left ; position: absolute; bottom: 12px; left: 12px" >اقرأ المقال</a>
                  </div>
              </div>
          </div>
          <div class=" col-lg-3 col-md-6 col-sm-12">
              <div class="card mb-3 mb-lg-0 " style="width: 17rem; min-height: 22rem; position: relative;">
                  <a href="blogs/blog2">
                      <img src="{{asset('imgs/blog-default.jpg')}}" class="blog-image card-img-top" alt="...">
                  </a>
                  <div class="card-body">
                      <h5 class="card-title text-dark">د. إسلام أسامة يقدم “أنماط الشخصيات” على ملتقى الدارين</h5>
                      <a href="blogs/blog2" class="read-btn btn border-none btn-success" style="float: left ; position: absolute; bottom: 12px; left: 12px" >اقرأ المقال</a>
                  </div>
              </div>
          </div>
          <div class=" col-lg-3 col-md-6 col-sm-12">
              <div class="card mb-3 mb-lg-0 " style="width: 17rem; min-height: 22rem; position: relative;">
                  <a href="blogs/blog3">
                      <img src="{{asset('imgs/DSCI0005-1200x900.jpg')}}" class="blog-image card-img-top" alt="...">
                  </a>
                  <div class="card-body">
                      <h5 class="card-title text-dark">أمسية “قادة التغيير” مع د.إسلام أسامة</h5>
                      <a href="blogs/blog3" class="read-btn btn border-none btn-success" style="float: left ; position: absolute; bottom: 12px; left: 12px" >اقرأ المقال</a>
                  </div>
              </div>
          </div>
      </div>

      <div class="border-bottom my-3"></div>

      <div class=" row d-grid d-lg-flex justify-content-center " style="direction: rtl">
          <div class=" col-lg-3 col-md-6 col-sm-12">
              <div class="card mb-3 mb-lg-0 " style="width: 17rem; min-height: 22rem; position: relative;">
                  <a href="blogs/blog4">
                      <img src="{{asset('imgs/blog-default.jpg')}}" class="blog-image card-img-top" alt="...">
                  </a>
                  <div class="card-body">
                      <h5 class="card-title text-dark">فى الساعات الأولى لفتح باب الاقتراع فى استفتاء الدستور.. د. إسلام أسامة يدلى بصوته فى مدرسة محمد رفعت الإبتدائية</h5>
                      <a href="blogs/blog4" class="read-btn btn border-none btn-success" style="float: left ; position: absolute; bottom: 12px; left: 12px" >اقرأ المقال</a>
                  </div>
              </div>
          </div>
          <div class=" col-lg-3 col-md-6 col-sm-12">
              <div class="card mb-3 mb-lg-0 " style="width: 17rem; min-height: 22rem; position: relative;">
                  <a href="blogs/blog5">
                      <img src="{{asset('imgs/blog-default.jpg')}}" class="blog-image card-img-top" alt="...">
                  </a>
                  <div class="card-body">
                      <h5 class="card-title text-dark">إيجابيات وسلبيات .. تحليل خطاب الرئيس26يونيو</h5>
                      <a href="blogs/blog5" class="read-btn btn border-none btn-success" style="float: left ; position: absolute; bottom: 12px; left: 12px" >اقرأ المقال</a>
                  </div>
              </div>
          </div>
          <div class=" col-lg-3 col-md-6 col-sm-12">
              <div class="card mb-3 mb-lg-0 " style="width: 17rem; min-height: 22rem; position: relative;">
                  <a href="blogs/blog6">
                      <img src="{{asset('imgs/blog-default.jpg')}}" class="blog-image card-img-top" alt="...">
                  </a>
                  <div class="card-body">
                      <h5 class="card-title text-dark">فن إدارة وتنظيم الوقت مع د. إسلام أسامة بالمعادي</h5>
                      <a href="blogs/blog6" class="read-btn btn border-none btn-success" style="float: left ; position: absolute; bottom: 12px; left: 12px" >اقرأ المقال</a>
                  </div>
              </div>
          </div>
      </div>

      <div class="border-bottom my-3"></div>


      <div class=" row d-grid d-lg-flex justify-content-center " style="direction: rtl">
          <div class=" col-lg-3 col-md-6 col-sm-12">
              <div class="card mb-3 mb-lg-0 " style="width: 17rem; min-height: 22rem; position: relative;">
                  <a href="blogs/blog7">
                      <img src="{{asset('imgs/blog-default.jpg')}}" class="blog-image card-img-top" alt="...">
                  </a>
                  <div class="card-body">
                      <h5 class="card-title text-dark">اليوم “الحلم والأمل” مع د. إسلام أسامة بالهلال الأحمر</h5>
                      <a href="blogs/blog7" class="read-btn btn border-none btn-success" style="float: left ; position: absolute; bottom: 12px; left: 12px" >اقرأ المقال</a>
                  </div>
              </div>
          </div>
          <div class=" col-lg-3 col-md-6 col-sm-12">
              <div class="card mb-3 mb-lg-0 " style="width: 17rem; min-height: 22rem; position: relative;">
                  <a href="blogs/blog8">
                      <img src="{{asset('imgs/blog-default.jpg')}}" class="blog-image card-img-top" alt="...">
                  </a>
                  <div class="card-body">
                      <h5 class="card-title text-dark">خاصمت نفسى</h5>
                      <a href="blogs/blog8" class="read-btn btn border-none btn-success" style="float: left ; position: absolute; bottom: 12px; left: 12px" >اقرأ المقال</a>
                  </div>
              </div>
          </div>
          <div class=" col-lg-3 col-md-6 col-sm-12">
              <div class="card mb-3 mb-lg-0 " style="width: 17rem; min-height: 22rem; position: relative;">
                  <a href="blogs/blog9">
                      <img src="{{asset('imgs/blog-default.jpg')}}" class="blog-image card-img-top" alt="...">
                  </a>
                  <div class="card-body">
                      <h5 class="card-title text-dark">اسلام اسامه وعدد من النشطاء يشيدون حملة “شباب بيحب مصر” للتوعية السياسية</h5>
                      <a href="blogs/blog9" class="read-btn btn border-none btn-success" style="float: left ; position: absolute; bottom: 12px; left: 12px" >اقرأ المقال</a>
                  </div>
              </div>
          </div>
      </div>


      <div class="border-bottom my-3"></div>











</div>
@endsection
