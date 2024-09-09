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
            <h2 class="mb-4">إيجابيات وسلبيات .. تحليل خطاب الرئيس26يونيو</h2>
            <div class="card">
                <img src="{{asset('../imgs/blog-default.jpg')}}" class="card-img-top" alt="Wild Landscape"/>
                <div class="card-body">

                    <div class="card-text ar">
                        <p>كنت قد استمعت إلى خطاب الدكتور محمد مرسي وقمت بكتابة بعض المحاور الرئيسية من النواحى الإيجابية والسلبية للخطاب مع تحليل موضوعى بسيط مع العلم أن هذا التقييم المتواضع من منظور علم النفس والاجتماع وليس من منظور اتجاه أو انتماء سياسي أو حزبي</p>
                        <br>
                        <p>أولاً الإيجابيات :</p>
                        <br>
                        <p>1 – تقديم كشف حساب سنوي من الحاكم للأمة وهو من أهم فوائد ثورة يناير أن يقف الحاكم أمام المواطنين يبين لهم ما له وما عليه ويترك لهم حرية تكوين وجهة النظر التى يرونها تقييمًا لما قدمه لهم .</p>
                        <br>
                        <p>2 – اعتراف الحاكم بالتقصير والفشل والخطأ في بعض القرارات بحيث ينطبق عليه قاعدة محاسبة النفس البشرية والتى تشكل فى المجمل مفهوم الشفافية والوضوح .</p>
                        <br>
                        <p>3 – توجيه الخطاب للشعب وليس لفئة أو تيار أو حزب أو تجمع بعينه وهو ما يعنى رؤية لرئيس لكل المصريين وأخفق الرئيس فى توصيل هذا المفهوم بل جاء متأخراً للمواطنين .</p>
                        <br>
                        <p>4 – أراد الرئيس أن يعطي إحساسا لمعارضيه بالثقة بالنفس ولم يتطرق إلى  مظاهرات 30 يونيو القادم مما يعنى وجود وإعداد تصور كامل عما سيحدث بالتشاور مع أصحاب الرأى وصناع القرار .</p>
                        <br>
                        <p>السلبيات:</p>
                        <br>
                        <p>1- بعض الاتهامات ظهرت بصورة مرسلة دون ذكر الدليل الواضح الجلى للعامة فى الخطاب بالإضافة للإساءة لأشخاص حتى وان كان يشوبهم الخطأ فلا يليق برئيس الدولة أن يفعل ذلك حتى وإن كان الحديث عن خصوم فالحديث عن الخصوم مع عدم وجودهم يجعل الشخص يخسر الكثير من النقاط .</p>
                        <br>
                        <p>2- تقديم وعود دون تحديد مواعيد واضحة لها .. فيعطى ذلك انطباعًا أنها ستكون مثل الوعود السابقة وبالتالي تصديقها بات صعبا حتى وإن كانت الوعود حقيقية .</p>
                        <br>
                        <p>3- فتح ملف علاقة الرئاسة بالكنيسة لايكون على الهواء والرئاسة مطالبة بمعرفة سبب تخوف المسيحيين من الإسلاميين وقد يفسر ذلك غياب البابا عن خطاب أمس وهو من الأمور التى لم يلاحظها إلا من كانت له نظرة موضوعية للخطاب فكان من المطلوب أن يجعل الخطاب موجهًا للنفس البشرية من رؤية مشهد متكامل يظهر وكأنه خطاب ود وحب ينشره الرئيس لكل طوائف المجتمع فى حالة اصطفاف وطنى حقيقي .</p>
                        <br>
                        <p>4-رغم عدم حضور الشخصيات والثمثيل الإسلامى الأوحد إلا أن التصفيق أظهر أنه كان من الأفضل أن يكون الحضور رسميا بدعوات لجميع الشخصيات العامة دون تحيز أو محاباه أو مجاملة بل كان سيظهر الخطاب بالشكل الذي يصل من خلاله للمواطن البسيط أنه يعيش فى دولة مؤسسات والحضور الرسمي والدعم للشرعية الحقيقية يأتى من كل الاتجاهات .</p>
                        <br>
                        <p>5- فى خطاب كهذا كان من الواجب تجنب الصدام والتهديدات الصريحة سواء كانت مباشرة أو غير مباشرة وأياً كان التهديد لأشخاص أو مؤسسات بل جعل الإعلام فى صف الحاكم هو أداة إيجابية حتى تقل حالة الاحتقان التى يراها المواطن العادى كل يوم فى جميع القنوات والإذاعات بل والصحف والمجلات .</p>
                        <br>
                        <p>6- لم يشف غليل المصريين تلك القرارات التي  أصبحت صعبة كالتجهيز لإصدار قرارات صارمة وتلاوتها على الهواء مما كان سيجعل المواطن العادى يشعر أن الخطاب أتى بثماره المرجوة والتي  تعود  بالخير فى نقاط ملموسة يستطيع  أن يراها  الفرد بعينه فى الحياة اليومية .</p>
                        <br>
                        <p>والله من وراء القصد</p>
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
