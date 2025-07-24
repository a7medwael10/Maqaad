@extends('site.layouts.app')

@section('content')

<!-- about -->
<section class="about">
    <div class="main-container">
        <div class="about-header-container">
            <div class="sub-section-header">
                <h1><span>عن</span> مَقعد</h1>
                <p>فريق يؤمن بدوره في خدمة المجتمع، ونسعى لإحداث أثر إيجابي ومستدام</p>
            </div>
        </div>
        <div class="about-body">
            <div class="main-container">
                <div class="about-content">
                    <div class="content-img">
                        <img src="{{asset('site')}}/images/about.png" alt="">
                    </div>
                </div>
                <div class="colloms">
                    <img src="{{asset('site')}}/images/about-colloms.svg" alt="">
                    <img src="{{asset('site')}}/images/about-colloms.svg" alt="">
                </div>
                <div class="about-text">
                    <h3>
                        <span>“مَقعد</span> هي مؤسسة وقفية للتوعية بأهمية استخدام مَقعد الطفل بالسيارة بموجب اتفاقية مع وزارة الصحة بالتعاون مع الجمعية السعودية للسلامة المرورية والعديد من الجهات الحكومية والأهلية ذات العلاقة، نعمل على تشجيع ومساندة الأسر في معرفة وتوفير المقاعد المناسبة، وذلك: «<span>للحد من وفيات وإصابات الأطفال في الحوادث المرورية</span>»”
                    </h3>
                </div>
                <div class="colloms colloms-seconed">
                    <img src="{{asset('site')}}/images/about-colloms.svg" alt="">
                    <img src="{{asset('site')}}/images/about-colloms.svg" alt="">
                </div>

                <div class="our-missiom">
                    <div class="row gap-lg-0 gap-md-0 gap-sm-4">
                        <!-- item -->
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="mission-item">
                                <div class="item-img">
                                    <img src="{{asset('site')}}/images/vision.svg" alt="">
                                </div>
                                <div class="item-text">
                                    <h4>رؤيتنا</h4>
                                    <p>#سعادتهم_في_سلامتهم.</p>
                                </div>
                            </div>
                        </div>
                        <!-- item -->
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="mission-item">
                                <div class="item-img">
                                    <img src="{{asset('site')}}/images/message.svg" alt="">
                                </div>
                                <div class="item-text">
                                    <h4>رسالتنا</h4>
                                    <p>حث أولياء الأمور على الالتزام بإجراءات السلامة والمحافظة على أرواح الأطفال بالسيارة.</p>
                                </div>
                            </div>
                        </div>
                        <!-- item -->
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="mission-item">
                                <div class="item-img">
                                    <img src="{{asset('site')}}/images/goals.svg" alt="">
                                </div>
                                <div class="item-text">
                                    <h4>هدفنا</h4>
                                    <p>التوعية بأهمية استخدام مقاعد الأطفال</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- partners -->
<section class="success-parners">
    <div class="main-container">
        <div class="about-header-container">
            <div class="sub-section-header">
                <h1><span>شركاء</span>  النجاح</h1>
                <p>الداعمون لمسيرتنا، نعتز بتعاونهم ونكبر بتكاتفنا معهم لتحقيق الأثر المنشود</p>
            </div>
        </div>
        <div class="success-partners-body">
            <div class="row body-container">
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="partner-item">
                        <img src="{{asset('site')}}/images/success (1).png" alt="">
                        <p>نيوم</p>
                        <a href="">
                            <span>رابط الموقع</span>
                            <img src="{{asset('site')}}/images/send.svg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="partner-item">
                        <img src="{{asset('site')}}/images/success (3).png" alt="">
                        <p>نيوم</p>
                        <a href="">
                            <span>رابط الموقع</span>
                            <img src="{{asset('site')}}/images/send.svg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="partner-item">
                        <img src="{{asset('site')}}/images/success (4).png" alt="">
                        <p>نيوم</p>
                        <a href="">
                            <span>رابط الموقع</span>
                            <img src="{{asset('site')}}/images/send.svg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="partner-item">
                        <img src="{{asset('site')}}/images/success (5).png" alt="">
                        <p>نيوم</p>
                        <a href="">
                            <span>رابط الموقع</span>
                            <img src="{{asset('site')}}/images/send.svg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="partner-item">
                        <img src="{{asset('site')}}/images/success (6).png" alt="">
                        <p>نيوم</p>
                        <a href="">
                            <span>رابط الموقع</span>
                            <img src="{{asset('site')}}/images/send.svg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="partner-item">
                        <img src="{{asset('site')}}/images/success (7).png" alt="">
                        <p>نيوم</p>
                        <a href="">
                            <span>رابط الموقع</span>
                            <img src="{{asset('site')}}/images/send.svg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="partner-item">
                        <img src="{{asset('site')}}/images/success (8).png" alt="">
                        <p>نيوم</p>
                        <a href="">
                            <span>رابط الموقع</span>
                            <img src="{{asset('site')}}/images/send.svg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="partner-item">
                        <img src="{{asset('site')}}/images/success (9).png" alt="">
                        <p>نيوم</p>
                        <a href="">
                            <span>رابط الموقع</span>
                            <img src="{{asset('site')}}/images/send.svg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="partner-item">
                        <img src="{{asset('site')}}/images/success (10).png" alt="">
                        <p>نيوم</p>
                        <a href="">
                            <span>رابط الموقع</span>
                            <img src="{{asset('site')}}/images/send.svg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="partner-item">
                        <img src="{{asset('site')}}/images/success (11).png" alt="">
                        <p>نيوم</p>
                        <a href="">
                            <span>رابط الموقع</span>
                            <img src="{{asset('site')}}/images/send.svg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="partner-item">
                        <img src="{{asset('site')}}/images/success (12).png" alt="">
                        <p>نيوم</p>
                        <a href="">
                            <span>رابط الموقع</span>
                            <img src="{{asset('site')}}/images/send.svg" alt="">
                        </a>
                    </div>
                </div>
            </div>

        </div>

    </div>

</section>
@endsection
