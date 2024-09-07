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
                  <a href="blogs-details/single-blog1.html">
                      <img src="{{asset('imgs/دكتور-إسلام-أسامة-جامعة-حلوان-3-22-1200x900.jpg')}}" class="blog-image card-img-top" alt="...">
                  </a>
                  <div class="card-body">
                      <h5 class="card-title text-dark">“فكرة” تكرم د. إسلام أسامة بجامعة حلوان</h5>
                      <a href="blogs-details/single-blog1.html" class="read-btn btn border-none btn-success" style="float: left ; position: absolute; bottom: 12px; left: 12px" >اقرأ المقال</a>
                  </div>
              </div>
          </div>
          <div class=" col-lg-3 col-md-6 col-sm-12">
              <div class="card mb-3 mb-lg-0 " style="width: 17rem; min-height: 22rem; position: relative;">
                  <a href="blogs-details/single-blog2.html">
                      <img src="{{asset('imgs/blog-default.jpg')}}" class="blog-image card-img-top" alt="...">
                  </a>
                  <div class="card-body">
                      <h5 class="card-title text-dark">د. إسلام أسامة يقدم “أنماط الشخصيات” على ملتقى الدارين</h5>
                      <a href="blogs-details/single-blog2.html" class="read-btn btn border-none btn-success" style="float: left ; position: absolute; bottom: 12px; left: 12px" >اقرأ المقال</a>
                  </div>
              </div>
          </div>
          <div class=" col-lg-3 col-md-6 col-sm-12">
              <div class="card mb-3 mb-lg-0 " style="width: 17rem; min-height: 22rem; position: relative;">
                  <a href="blogs-details/single-blog3.html">
                      <img src="{{asset('imgs/DSCI0005-1200x900.jpg')}}" class="blog-image card-img-top" alt="...">
                  </a>
                  <div class="card-body">
                      <h5 class="card-title text-dark">أمسية “قادة التغيير” مع د.إسلام أسامة</h5>
                      <a href="blogs-details/single-blog3.html" class="read-btn btn border-none btn-success" style="float: left ; position: absolute; bottom: 12px; left: 12px" >اقرأ المقال</a>
                  </div>
              </div>
          </div>
      </div>

      <div class="border-bottom my-3"></div>

      <div class=" row d-grid d-lg-flex justify-content-center " style="direction: rtl">
          <div class=" col-lg-3 col-md-6 col-sm-12">
              <div class="card mb-3 mb-lg-0 " style="width: 17rem; min-height: 22rem; position: relative;">
                  <a href="blogs-details/single-blog4.html">
                      <img src="{{asset('imgs/blog-default.jpg')}}" class="blog-image card-img-top" alt="...">
                  </a>
                  <div class="card-body">
                      <h5 class="card-title text-dark">فى الساعات الأولى لفتح باب الاقتراع فى استفتاء الدستور.. د. إسلام أسامة يدلى بصوته فى مدرسة محمد رفعت الإبتدائية</h5>
                      <a href="blogs-details/single-blog4.html" class="read-btn btn border-none btn-success" style="float: left ; position: absolute; bottom: 12px; left: 12px" >اقرأ المقال</a>
                  </div>
              </div>
          </div>
          <div class=" col-lg-3 col-md-6 col-sm-12">
              <div class="card mb-3 mb-lg-0 " style="width: 17rem; min-height: 22rem; position: relative;">
                  <a href="blogs-details/single-blog5.html">
                      <img src="{{asset('imgs/blog-default.jpg')}}" class="blog-image card-img-top" alt="...">
                  </a>
                  <div class="card-body">
                      <h5 class="card-title text-dark">إيجابيات وسلبيات .. تحليل خطاب الرئيس26يونيو</h5>
                      <a href="blogs-details/single-blog5.html" class="read-btn btn border-none btn-success" style="float: left ; position: absolute; bottom: 12px; left: 12px" >اقرأ المقال</a>
                  </div>
              </div>
          </div>
          <div class=" col-lg-3 col-md-6 col-sm-12">
              <div class="card mb-3 mb-lg-0 " style="width: 17rem; min-height: 22rem; position: relative;">
                  <a href="blogs-details/single-blog6.html">
                      <img src="{{asset('imgs/blog-default.jpg')}}" class="blog-image card-img-top" alt="...">
                  </a>
                  <div class="card-body">
                      <h5 class="card-title text-dark">فن إدارة وتنظيم الوقت مع د. إسلام أسامة بالمعادي</h5>
                      <a href="blogs-details/single-blog6.html" class="read-btn btn border-none btn-success" style="float: left ; position: absolute; bottom: 12px; left: 12px" >اقرأ المقال</a>
                  </div>
              </div>
          </div>
      </div>

      <div class="border-bottom my-3"></div>


      <div class=" row d-grid d-lg-flex justify-content-center " style="direction: rtl">
          <div class=" col-lg-3 col-md-6 col-sm-12">
              <div class="card mb-3 mb-lg-0 " style="width: 17rem; min-height: 22rem; position: relative;">
                  <a href="blogs-details/single-blog7.html">
                      <img src="{{asset('imgs/blog-default.jpg')}}" class="blog-image card-img-top" alt="...">
                  </a>
                  <div class="card-body">
                      <h5 class="card-title text-dark">اليوم “الحلم والأمل” مع د. إسلام أسامة بالهلال الأحمر</h5>
                      <a href="blogs-details/single-blog7.html" class="read-btn btn border-none btn-success" style="float: left ; position: absolute; bottom: 12px; left: 12px" >اقرأ المقال</a>
                  </div>
              </div>
          </div>
          <div class=" col-lg-3 col-md-6 col-sm-12">
              <div class="card mb-3 mb-lg-0 " style="width: 17rem; min-height: 22rem; position: relative;">
                  <a href="blogs-details/single-blog8.html">
                      <img src="{{asset('imgs/blog-default.jpg')}}" class="blog-image card-img-top" alt="...">
                  </a>
                  <div class="card-body">
                      <h5 class="card-title text-dark">خاصمت نفسى</h5>
                      <a href="blogs-details/single-blog8.html" class="read-btn btn border-none btn-success" style="float: left ; position: absolute; bottom: 12px; left: 12px" >اقرأ المقال</a>
                  </div>
              </div>
          </div>
          <div class=" col-lg-3 col-md-6 col-sm-12">
              <div class="card mb-3 mb-lg-0 " style="width: 17rem; min-height: 22rem; position: relative;">
                  <a href="blogs-details/single-blog9.html">
                      <img src="{{asset('imgs/blog-default.jpg')}}" class="blog-image card-img-top" alt="...">
                  </a>
                  <div class="card-body">
                      <h5 class="card-title text-dark">اسلام اسامه وعدد من النشطاء يشيدون حملة “شباب بيحب مصر” للتوعية السياسية</h5>
                      <a href="blogs-details/single-blog9.html" class="read-btn btn border-none btn-success" style="float: left ; position: absolute; bottom: 12px; left: 12px" >اقرأ المقال</a>
                  </div>
              </div>
          </div>
      </div>


      <div class="border-bottom my-3"></div>


      <div class=" row  d-grid d-lg-flex justify-content-center " style="direction: rtl">
          <div class=" col-lg-3 col-md-6 col-sm-12">
              <div class="card mb-3 mb-lg-0 " style="width: 17rem; min-height: 22rem; position: relative;">
                  <a href="blogs-details/single-blog10.html">
                      <img src="{{asset('imgs/blog-default.jpg')}}" class="blog-image card-img-top" alt="...">
                  </a>
                  <div class="card-body">
                      <h5 class="card-title text-dark">يوم فى حب مصر بعنوان”كلنا فى مركب واحدة” بجامعة عين شمس</h5>
                      <a href="blogs-details/single-blog10.html" class="read-btn btn border-none btn-success" style="float: left ; position: absolute; bottom: 12px; left: 12px" >اقرأ المقال</a>
                  </div>
              </div>
          </div>
          <div class=" col-lg-3 col-md-6 col-sm-12">
              <div class="card mb-3 mb-lg-0 " style="width: 17rem; min-height: 22rem; position: relative;">
                  <a href="blogs-details/single-blog11.html">
                      <img src="{{asset('imgs/blog-default.jpg')}}" class="blog-image card-img-top" alt="...">
                  </a>
                  <div class="card-body">
                      <h5 class="card-title text-dark">اسلام اسامه يشارك فى مبادرة تعاون بين ناشطى المجتمع المدنى</h5>
                      <a href="blogs-details/single-blog11.html" class="read-btn btn border-none btn-success" style="float: left ; position: absolute; bottom: 12px; left: 12px" >اقرأ المقال</a>
                  </div>
              </div>
          </div>
          <div class=" col-lg-3 col-md-6 col-sm-12">
              <div class="card mb-3 mb-lg-0 " style="width: 17rem; min-height: 22rem; position: relative;">
                  <a href="blogs-details/single-blog12.html">
                      <img src="{{asset('imgs/blog-default.jpg')}}" class="blog-image card-img-top" alt="...">
                  </a>
                  <div class="card-body">
                      <h5 class="card-title text-dark">اسلام اسامه ينضم الى مشروع المجتمع المدنى المصري بالجامعة الامريكية</h5>
                      <a href="blogs-details/single-blog12.html" class="read-btn btn border-none btn-success" style="float: left ; position: absolute; bottom: 12px; left: 12px" >اقرأ المقال</a>
                  </div>
              </div>
          </div>
      </div>

      <div class="border-bottom my-3"></div>


      <div class=" row  d-grid d-lg-flex justify-content-center " style="direction: rtl">
          <div class=" col-lg-3 col-md-6 col-sm-12">
              <div class="card mb-3 mb-lg-0 " style="width: 17rem; min-height: 22rem; position: relative;">
                  <a href="blogs-details/single-blog13.html">
                      <img src="{{asset('imgs/blog-default.jpg')}}" class="blog-image card-img-top" alt="...">
                  </a>
                  <div class="card-body">
                      <h5 class="card-title text-dark">اسلام اسامه يشارك فى مؤتمر الحوار الوطني</h5>
                      <a href="blogs-details/single-blog13.html" class="read-btn btn border-none btn-success" style="float: left ; position: absolute; bottom: 12px; left: 12px" >اقرأ المقال</a>
                  </div>
              </div>
          </div>
          <div class=" col-lg-3 col-md-6 col-sm-12">
              <div class="card mb-3 mb-lg-0 " style="width: 17rem; min-height: 22rem; position: relative;">
                  <a href="blogs-details/single-blog14.html">
                      <img src="{{asset('imgs/blog-default.jpg')}}" class="blog-image card-img-top" alt="...">
                  </a>
                  <div class="card-body">
                      <h5 class="card-title text-dark">اسلام اسامه ولقاءات من ميدان التحرير</h5>
                      <a href="blogs-details/single-blog14.html" class="read-btn btn border-none btn-success" style="float: left ; position: absolute; bottom: 12px; left: 12px" >اقرأ المقال</a>
                  </div>
              </div>
          </div>
          <div class=" col-lg-3 col-md-6 col-sm-12">
              <div class="card mb-3 mb-lg-0 " style="width: 17rem; min-height: 22rem; position: relative;">
                  <a href="blogs-details/single-blog15.html">
                      <img src="{{asset('imgs/blog-default.jpg')}}" class="blog-image card-img-top" alt="...">
                  </a>
                  <div class="card-body">
                      <h5 class="card-title text-dark">اسلام اسامه يجول محافظات الجمهورية مع حزب السلام الإجتماعى</h5>
                      <a href="blogs-details/single-blog15.html" class="read-btn btn border-none btn-success" style="float: left ; position: absolute; bottom: 12px; left: 12px" >اقرأ المقال</a>
                  </div>
              </div>
          </div>
      </div>


      <div class="border-bottom my-3"></div>


      <div class=" row  d-grid d-lg-flex justify-content-center  mb-5" style="direction: rtl">
          <div class=" col-lg-3 col-md-6 col-sm-12">
              <div class="card mb-3 mb-lg-0 " style="width: 17rem; min-height: 22rem; position: relative;">
                  <a href="blogs-details/single-blog16.html">
                      <img src="{{asset('imgs/blog-default.jpg')}}" class="blog-image card-img-top" alt="...">
                  </a>
                  <div class="card-body">
                      <h5 class="card-title text-dark">اسلام اسامه يشارك فى مؤتمر الحوار الوطني</h5>
                      <a href="blogs-details/single-blog16.html" class="read-btn btn border-none btn-success" style="float: left ; position: absolute; bottom: 12px; left: 12px" >اقرأ المقال</a>
                  </div>
              </div>
          </div>
          <div class=" col-lg-3 col-md-6 col-sm-12">
              <div class="card mb-3 mb-lg-0 " style="width: 17rem; min-height: 22rem; position: relative;">
                  <a href="blogs-details/single-blog17.html">
                      <img src="{{asset('imgs/blog-default.jpg')}}" class="blog-image card-img-top" alt="...">
                  </a>
                  <div class="card-body">
                      <h5 class="card-title text-dark">د.اسلام اسامه ينضم رسمياً لحزب السلام الاجتماعى</h5>
                      <a href="blogs-details/single-blog17.html" class="read-btn btn border-none btn-success" style="float: left ; position: absolute; bottom: 12px; left: 12px" >اقرأ المقال</a>
                  </div>
              </div>
          </div>
          <div class=" col-lg-3 col-md-6 col-sm-12">
              <div class="card mb-3 mb-lg-0 " style="width: 17rem; min-height: 22rem; position: relative;">
                  <a href="blogs-details/single-blog18.html">
                      <img src="{{asset('imgs/blog-default.jpg')}}" class="blog-image card-img-top" alt="...">
                  </a>
                  <div class="card-body">
                      <h5 class="card-title text-dark">اسلام اسامه يشارك مع شباب حملة ابدأ بنفسك فى تنظيف ميدان التحرير</h5>
                      <a href="blogs-details/single-blog18.html" class="read-btn btn border-none btn-success" style="float: left; position: absolute; bottom: 12px; left: 12px" >اقرأ المقال</a>
                  </div>
              </div>
          </div>
      </div>









</div>
@endsection
