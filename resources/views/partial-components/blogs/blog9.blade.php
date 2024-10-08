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
            <h2 class="mb-4">اسلام اسامه وعدد من النشطاء يشيدون حملة “شباب بيحب مصر” للتوعية السياسية</h2>
            <div class="card">
                <img src="{{asset('../imgs/blog-default.jpg')}}" class="card-img-top" alt="Wild Landscape"/>
                <div class="card-body">
                    <div class="card-text ar">
                        <p>بكيت على الشباب بدمع عيـني فلم يغن البكاء ولا النحـيب</p>
                        <p>فيا أسفا اسفت على شـباب نعاه الشيب والرأس الخضيب</p>
                        <p>عريت من الشباب وكنت غصـنا كما يعرى من الورق القضيب</p>
                        <p>فيا ليت الشباب يعـود يومـا لاخبره بما فعـل المشـيب</p>
                        <br>
                        <p>فتحت عينى على الدنيا لقيت نفسى فى أم الدنيا.. انكتب فى شهادة ميلادى مصري، أبويا مصرى وأمى مصرية.</p>
                        <p>إحنا المصريين اتولدنا وإحنا شايلين جنسيتنا وسام على صدرنا.. لأننا مصريون.. كِبرنا فيها.. عشنا مع أهلنا وأحبابنا وأصحابنا فيها.. حتى لو فى حد فيكم متولدش فى مصر وعاش حياته فى بلد تانية – هو فى الآخر مصرى – هيلف يلف ويرجع تانى لبلده.</p>
                        <p>تعبنا فيها وعشنا همومنا وكمان أفراحنا فيها.. بنكبر وأحلامنا بتكبر معانا وإحنا فيها، حتى لو كنا بعيدين عنها – مصر فى قلبنا – منين رحنا و منين جينا هى فى قلبنا.</p>
                        <p>مهما حصل فيها.. بلدك هى وطنك، ووطنك هو اختيار ربنا – سبحانه وتعالى – ليك. مهما تعبت فيها هتفضل تحبها وهتفضل دايماً عايزها أحسن بلد فى الدنيا.. مهما اتغربت عنها هتفضل دايماً حاسس بالحنين ليها.</p>
                        <br>
                        <p>هكذا بدأ المهندس اسلام اسامه فى بيان صادر على صفحته الرسمية على الفيس بوك عند بدأ تدشين وتفعيل حركة شباب بيحب مصر من أجل التوعية السياسية للشباب حيث اعلن ان الشباب افضل فترات العمر، وتعود افضليتها لما يجتمع للانسان فيها من القوة والنشاط دون غيرها وراحة الحياة وبهجتها في الدنيا غالبا ماتكون في مرحلة الشباب فهي مرحة يتطلع الصغير ان يصل اليها ويتمنى الكبير ان يرجع اليها مرحلة بكى عليها الشيوخ وتغني بها الشعراء</p>
                        <br>
                        <p>حيث قال أن الشباب عماد الامم، فالشباب هم عماد حضارة الامم وسر نهضتها وحاملو لوائها، وهم في سن الهمم المتوثبة والجهود المبذولة سن البذل والعطاء</p>
                        <br>
                        <p>كما أعلن أحد الشباب المشاركين فى الحركة على لسانه قائلاً: اننا مجموعة من الشباب المصري لا يجمعنا إلا حب هذا البلد و الرغبه فى إصلاحه وتنميته وتقدمه نحو غد افضل ومستقبل مشرق.. ورغم ان الغالبيه العظمى منا لا ينتمى لأى تيار سياسى و لا يربطنا بالسياسه أى رابط إلا اننا مصممون على إكمال الطريق و إننا نؤمن أننا نستطيع استكمال ما توقف عنده الاخرون في التنمية .. و مقتنعون بقدرتنا و حقنا فى تغيير هذا المجتمع..أتفقنا واجتمعنا على حب الوطن والتضحية من أجله والرغبة في إصلاحه</p>
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
