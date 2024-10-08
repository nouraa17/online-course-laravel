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
            <h2 class="mb-4">خاصمت نفسى</h2>
            <div class="card">
                <img src="{{asset('../imgs/blog-default.jpg')}}" class="card-img-top" alt="Wild Landscape"/>
                <div class="card-body">

                    <div class="card-text ar text-center">
                        <p>اذا كان الخصام نوع من أنواع قطع الاتصال بشخص ما، ظنا منا أننا نوصل رسالة لهذا الشخص، فهو بلا شك في حد ذاته سوء اتصال مع الذات، لكل من يتخذ الخصام سبيلا لحل أي مشكلة، أقول لك “قد خاصمت نفسك أولا”.</p>
                        <br>
                        <p>إذا كان الخصام هدفه التسبب في إيلام الآخرين عن طريق عزلهم عن حياتنا ، فدعوني أهمس لكم بسر ، و هو ان الخصام يسبب لنا أيضا نفس الألم و نفس العزلة ، غير اننا في هذه الحالة نظن و يهيأ لنا أن لنا اليد العليا و أن هذا من حقنا. لكننا في الحقيقة نحرم أنفنسا من التعامل مع شخص له وجود في حياتنا مما يسبب لنا مشاكل و ضغوط نفسية، ففي هذه الحالة نحن نخاصم أنفسنا أولا لأننا لا نساعد على حل مشكلة في حياتنا.</p>
                        <br>
                        <p>كم مرة سمعنا هذه الجملة سواء من أب أو ام أو أخ أو صديق ” أصل أنا بعلمه الأدب” ، دعونا نسترجع معا السيناريو من البداية، يختلف اثنان في الرأي، و يحتدوا على بعض في الكلام، ثم يتخاصموا، و يأبى كل طرف أن يكلم الآخر، منتظرا من الطرف الآخر أن يأخذ خطوة للأمام. ظنا منه أن “كرامته هتنجرح لو بدأ هو”، و تبدأ معها مرحلة في غاية القسوة ، و خصوصا إذا كان الطرفان يعيشان في نفس المنزل، و يزيد الأمر قسوة لو تراجع أحد الطرفان و حاول المصالحة مع رفض الطرف الآخر.</p>
                        <br>
                        <p>السؤال هنا: هل الخصام هو الحل الوحيد؟</p>
                        <p>الإجابة : الخصام ليس حلا من الأساس.</p>
                        <br>
                        <p>ما الحل إذا؟</p>
                        <br>
                        <p>لإجابة هذا السؤال، دعوني أستعرض معكم مثالين عن شخصين مختلفين تماما في هذا الأمر، و قد عشت مع هذين الشخصين، الشخص الأول كما ذكرنا في المثال، لا يوجد عنده مشكلة أن يخاصم شخصا أخر لمدة طويلة ، و أن يتجاهله تماما و يقسو عليه و لا يرد عليه الكلام، وهذه هي طريقته في حل المشكلات، و بعد محاولات مضنية يحدث الصلح.</p>
                        <br>
                        <p>أما الشخص الثاني فهو قد يغضب و قد يشعر بالإهانة ، و لكنه لا يخاصم أبدا ، و لا أكاد أتذكر يوما تخاصمنا فيه و لا حتى لساعات، اللهم إلا إذا كنت أنا الذي خاصمت، أما هو فلا، قد نختلف و نختلف بشدة في بعض الأحيان ، و قد أخطيء في حقه ، و يحدث هذا بالليل، أجده في الصباح و كأن شيئا لم يكن، ثم بعد أن يلقى علي تحية الصباح بابتسامة يبدأ في التحدث عن موضوع الاختلاف في هدوء و يبدأ في العتاب و عرض أراؤه، هذه هي طريقة حله للمشكلات، تكفيه كلمة اعتذار بسيطة، و ينسى كل شيء، أحمد الله أنه قابلته لأني تعلمت منه الكثير.</p>
                        <br>
                        <p>احتكاكي بالشخصيتين جعلني أقارن بينهما من حيث معالجة المشكلات و جدوى الخصام، وجدت أن الخصام لا يعالج المشكلات، بل هو يعلقها لبضعة أيام حتى تخمد النار المشتعلة في صدور المتخاصمين، ثم بعدها ينتظر من له اليد العليا الطرف الآخر حتى يعتذر فيتمنع هو ليحصل على اهتمام أكثر.</p>
                        <br>
                        <p>ماذا لو تركنا النار تخمد لأننا بشر قبل كل شيء، و لكننا لا نترك الأمر كثيرا، يكفينا ساعات قلائل، ثم ندعو بعضنا البعض لمناقشة الموضوع ، و إن كان قد صدر من أخيك شيئا أزعجك أو أهانك فلتصرح به و لتتكلم عنه و لتعبر عن مشاعرك، الخصام لا يقول شيئا، الخصام وحش صامت يدمر علاقة شخصين و يزرع بينهما القسوة و الألم.</p>
                        <br>
                        <p>و لتتذكر دائما قبل أن تخاصم شخصا، إنك قد خاصمت نفسك أولا</p>
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
