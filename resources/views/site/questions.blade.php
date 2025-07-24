@extends('site.layouts.app')

@section('content')
    <section class="blog-page  mr-section">
        <div class="main-container">
            <div class="about-header-container">
                <div class="sub-section-header">
                    <h1><span>أسئلة</span>   متكرر عن مبادرة مقعد</h1>
                    <p>إجابات لأكثر الاستفسارات التي نتلقاها حول المبادرة.</p>
                </div>
            </div>

            <div class="ctmx-container">

                <!--  -->
                <div class="questions-common-conatiner">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    1. متى يجب أن يبدأ الطفل باستخدام مقعد السيارة؟
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    يجب أن يبدأ الطفل باستخدام مقعد السيارة منذ الولادة. الأطفال حديثو الولادة حتى عمر السنتين يجب أن يجلسوا في مقاعد مخصصة مواجهة للخلف لتوفير أكبر قدر من الحماية لرأسهم ورقبتهم.                            </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    2. متى يجب أن يبدأ الطفل باستخدام مقعد السيارة؟
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    نحن نقدم مجموعة واسعة من خدمات السبك المعدني، بما في ذلك تصنيع القطع المعدنية للآلات الثقيلة، وتصنيع أجزاء خاصة بقطاعات الطاقة والبناء، إلى جانب خدمات تصنيع الهياكل المعدنية المخصصة.                            </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    3. متى يجب أن يبدأ الطفل باستخدام مقعد السيارة؟
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    يجب أن يبدأ الطفل باستخدام مقعد السيارة منذ الولادة. الأطفال حديثو الولادة حتى عمر السنتين يجب أن يجلسوا في مقاعد مخصصة مواجهة للخلف لتوفير أكبر قدر من الحماية لرأسهم ورقبتهم.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    4. متى يجب أن يبدأ الطفل باستخدام مقعد السيارة؟
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    يجب أن يبدأ الطفل باستخدام مقعد السيارة منذ الولادة. الأطفال حديثو الولادة حتى عمر السنتين يجب أن يجلسوا في مقاعد مخصصة مواجهة للخلف لتوفير أكبر قدر من الحماية لرأسهم ورقبتهم.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
