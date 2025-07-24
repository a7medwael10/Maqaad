@extends('site.layouts.app')

@section('content')
    <!-- about -->
    <section class="about">
        <div class="main-container">
            <div class="about-header">
                <img src="{{asset('site')}}/images/main-section-icon.svg" alt="">
                <h1><span>عن</span> مَقعد</h1>
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
                        <a href="about-meqaad.html" class="ctm-btn2" >تعرف على المزيد</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- gallary -->
    <section class="gallary">
        <div class="main-container">
            <div class="gallary-header">
                <div class="header-title">
                    <img src="{{asset('site')}}/images/main-section-icon.svg" alt="">
                    <h1><span>صور</span>  من مبادرتنا </h1>
                </div>
                <a href="img-gallary.html">عرض الكل</a>
            </div>
            <!-- gallary images -->
            <div class="row">
                <a href="{{asset('site')}}/images/gallary1 (1).png" data-fancybox="gallery" data-caption="" class="col-lg-4 col-md-6 col-sm-12">
                    <div class="gallary-item">
                        <img src="{{asset('site')}}/images/gallary1 (1).png" alt="">
                    </div>
                </a>
                <a href="{{asset('site')}}/images/gallary1 (6).png" data-fancybox="gallery" data-caption="" class="col-lg-4 col-md-6 col-sm-12">
                    <div class="gallary-item">
                        <img src="{{asset('site')}}/images/gallary1 (6).png" alt="">
                    </div>
                </a>
                <a href="{{asset('site')}}/images/gallary1 (3).png" data-fancybox="gallery" data-caption="" class="col-lg-4 col-md-6 col-sm-12">
                    <div class="gallary-item">
                        <img src="{{asset('site')}}/images/gallary1 (3).png" alt="">
                    </div>
                </a>
                <a href="{{asset('site')}}/images/gallary1 (4).png" data-fancybox="gallery" data-caption="" class="col-lg-4 col-md-6 col-sm-12">
                    <div class="gallary-item">
                        <img src="{{asset('site')}}/images/gallary1 (4).png" alt="">
                    </div>
                </a>
                <a href="{{asset('site')}}/images/gallary1 (5).png" data-fancybox="gallery" data-caption="" class="col-lg-4 col-md-6 col-sm-12">
                    <div class="gallary-item">
                        <img src="{{asset('site')}}/images/gallary1 (5).png" alt="">
                    </div>
                </a>
                <a href="{{asset('site')}}/images/gallary1 (6).png" data-fancybox="gallery" data-caption="" class="col-lg-4 col-md-6 col-sm-12">
                    <div class="gallary-item">
                        <img src="{{asset('site')}}/images/gallary1 (6).png" alt="">
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- end gallary -->
    <!-- choosing maqaad -->
    <section class="choosing-maqaad">
        <div class="main-container">
            <div class="choosing-content">
                <div class="choosing-header">
                    <h1><span>تعرف</span> على المقعد المناسب لطفلك</h1>
                </div>
                <form action="">

                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12 choosing-item">
                            <label for="">الطول (سم) </label>
                            <input type="text" placeholder=" الطول">
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 choosing-item">
                            <label for="">تاريخ الولادة </label>
                            <div class="input-date">

                                <input type="date" placeholder="اليوم / الشهر / السنة">
                                <img src="{{asset('site')}}/images/calendar.svg" alt="">

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 choosing-item">
                            <label for="">الوزن (كيلو)</label>
                            <input type="text" placeholder="الوزن(كيلو)">
                        </div>
                    </div>
                    <button type="submit">بحث</button>
                </form>
            </div>
        </div>


    </section>


    <section class="banner">
        <div class="banner-img">
            <img src="{{asset('site')}}/images/banner.png" alt="">
        </div>
    </section>
    <!-- news -->
    <section class="news">
        <div class="main-container">
            <div class="news-header">
                <div class="header-title">
                    <img src="{{asset('site')}}/images/main-section-icon.svg" alt="">
                    <h1><span>أخبار</span> مَقعد</h1>
                </div>
                <a href="media-center.html">عرض الكل</a>
            </div>
            <div class="news-cards">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="news-card">
                            <div class="card-date">
                                <p>20 مارس 2025</p>
                            </div>
                            <div class="card-img">
                                <img src="{{asset('site')}}/images/news1.png" alt="">
                            </div>
                            <div class="card-text">
                                <h2>سلامة الطفل في السيارة</h2>
                                <p>من أهم حقوق الطفل هو المحافظة على سلامته في السيارة، فعند توقُّع قدوم طفل جديد يجب تعلُّم طريقة تركيب مقعد خاص به </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="news-card">
                            <div class="card-date">
                                <p>20 مارس 2025</p>
                            </div>
                            <div class="card-img">
                                <img src="{{asset('site')}}/images/news1.png" alt="">
                            </div>
                            <div class="card-text">
                                <h2>سلامة الطفل في السيارة</h2>
                                <p>من أهم حقوق الطفل هو المحافظة على سلامته في السيارة، فعند توقُّع قدوم طفل جديد يجب تعلُّم طريقة تركيب مقعد خاص به </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="news-card">
                            <div class="card-date">
                                <p>20 مارس 2025</p>
                            </div>
                            <div class="card-img">
                                <img src="{{asset('site')}}/images/news1.png" alt="">
                            </div>
                            <div class="card-text">
                                <h2>سلامة الطفل في السيارة</h2>
                                <p>من أهم حقوق الطفل هو المحافظة على سلامته في السيارة، فعند توقُّع قدوم طفل جديد يجب تعلُّم طريقة تركيب مقعد خاص به </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end news -->
    <!-- statistics -->
    <section class="statistics">

        <svg width="100%" height="100" viewBox="0 0 1200 100" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M0 50 Q 100 0, 200 50 T 400 50 T 600 50 T 800 50 T 1000 50 T 1200 50"
                stroke="#BDE7F6"
                stroke-width="2"
                stroke-dasharray="10,5"
                stroke-linecap="round"
                fill="transparent"
            >
                <animate
                    attributeName="stroke-dashoffset"
                    from="0"
                    to="-30"
                    dur="1s"
                    repeatCount="indefinite"
                />
            </path>
        </svg>


        <!-- pogress -->

        <div class="statistics-progress">
            <div class="main-container">

                <section id="progressSection" >
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12 progress-wrapper" data-percent="40">
                            <div class="progress-item-main" >

                                <div class="progress-circle-container">
                                    <svg class="progress-circle" viewBox="0 0 100 50">
                                        <!-- Background -->
                                        <path
                                            d="M 10 50 A 40 40 0 0 1 90 50"
                                            fill="none"
                                            stroke="#BDE7F6"
                                            stroke-width="10"
                                        />

                                        <!-- Foreground (progress) -->
                                        <path
                                            class="progressArc"
                                            d="M 10 50 A 40 40 0 0 1 90 50"
                                            fill="none"
                                            stroke="#F25C7F"
                                            stroke-width="10"
                                            stroke-dasharray="125.6"
                                            stroke-dashoffset="125.6"
                                            stroke-linecap="round"
                                        />
                                    </svg>
                                    <div class="progressText progress-text">0%</div>

                                </div>


                                <div class="progress-labels">
                                    <span>100%</span>
                                    <span>0%</span>
                                </div>

                            </div>


                            <div class="progress-title">
                                <p>من مساهمة المقاعد في خفض وفيات الأطفال بالحوادث </p>
                            </div>
                        </div>
                        <!-- bar -->
                        <div class="col-lg-4 col-md-6 col-sm-12 progress-wrapper" data-percent="80">
                            <div class="progress-item-main" >

                                <div class="progress-circle-container">
                                    <svg class="progress-circle" viewBox="0 0 100 50">
                                        <!-- Background -->
                                        <path
                                            d="M 10 50 A 40 40 0 0 1 90 50"
                                            fill="none"
                                            stroke="#BDE7F6"
                                            stroke-width="10"
                                        />

                                        <!-- Foreground (progress) -->
                                        <path
                                            class="progressArc"
                                            d="M 10 50 A 40 40 0 0 1 90 50"
                                            fill="none"
                                            stroke="#F25C7F"
                                            stroke-width="10"
                                            stroke-dasharray="125.6"
                                            stroke-dashoffset="125.6"
                                            stroke-linecap="round"
                                        />
                                    </svg>
                                    <div class="progressText progress-text">0%</div>

                                </div>

                                <div class="progress-labels">
                                    <span>100%</span>
                                    <span>0%</span>
                                </div>
                            </div>
                            <div class="progress-title">
                                <p>من مساهمة المقاعد في تقليل خطر الإصابة بالحوادث  </p>
                            </div>

                        </div>
                        <!-- bar -->
                        <div class="col-lg-4 col-md-6 col-sm-12 progress-wrapper" data-percent="10">
                            <div class="progress-item-main" >

                                <div class="progress-circle-container">
                                    <svg class="progress-circle" viewBox="0 0 100 50">
                                        <!-- Background -->
                                        <path
                                            d="M 10 50 A 40 40 0 0 1 90 50"
                                            fill="none"
                                            stroke="#BDE7F6"
                                            stroke-width="10"
                                        />

                                        <!-- Foreground (progress) -->
                                        <path
                                            class="progressArc"
                                            d="M 10 50 A 40 40 0 0 1 90 50"
                                            fill="none"
                                            stroke="#F25C7F"
                                            stroke-width="10"
                                            stroke-dasharray="125.6"
                                            stroke-dashoffset="125.6"
                                            stroke-linecap="round"
                                        />
                                    </svg>
                                    <div class="progressText progress-text">0%</div>

                                </div>

                                <div class="progress-labels">
                                    <span>100%</span>
                                    <span>0%</span>
                                </div>
                            </div>
                            <div class="progress-title">
                                <p>من استخدام مقاعد الأمان للأطفال في المملكة العربية السعودية</p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

        </div>

        <svg
            width="100%"
            height="100"
            viewBox="0 0 1200 100"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
            style="transform: scaleY(-1);"
        >
            <path
                d="M0 50 Q 100 0, 200 50 T 400 50 T 600 50 T 800 50 T 1000 50 T 1200 50"
                stroke="#BDE7F6"
                stroke-width="2"
                stroke-dasharray="10,5"
                stroke-linecap="round"
                fill="transparent"
            >
                <animate
                    attributeName="stroke-dashoffset"
                    from="0"
                    to="30"
                    dur="1s"
                    repeatCount="indefinite"
                />
            </path>
        </svg>

    </section>

    <!-- end statistics -->
    <!-- our partners -->
    <section class="our-partners">
        <div class="our-partner-header">
            <h1><span>شركاء </span>النجاح</h1>
        </div>

        <div class="partners-container">

            <div class="owl-carousel owl-theme partners-carousel first">
                <div class="item">
                    <img src="{{asset('site')}}/images/partner.png" alt="">
                </div>
                <div class="item">
                    <img src="{{asset('site')}}/images/partner1 (1).png" alt="">
                </div>
                <div class="item">
                    <img src="{{asset('site')}}/images/partner1 (2).png" alt="">
                </div>
                <div class="item">
                    <img src="{{asset('site')}}/images/partner1 (3).png" alt="">
                </div>
                <div class="item">
                    <img src="{{asset('site')}}/images/partner1 (4).png" alt="">
                </div>
                <div class="item">
                    <img src="{{asset('site')}}/images/partner1 (5).png" alt="">
                </div>
                <div class="item">
                    <img src="{{asset('site')}}/images/partner1 (6).png" alt="">
                </div>
                <div class="item">
                    <img src="{{asset('site')}}/images/partner1 (7).png" alt="">
                </div>

            </div>
        </div>

        <!-- seconed carousel -->
        <div class="partners-container">

            <div class="owl-carousel owl-theme partners-carousel seconed">
                <div class="item">
                    <img src="{{asset('site')}}/images/partner.png" alt="">
                </div>
                <div class="item">
                    <img src="{{asset('site')}}/images/partner1 (1).png" alt="">
                </div>
                <div class="item">
                    <img src="{{asset('site')}}/images/partner1 (2).png" alt="">
                </div>
                <div class="item">
                    <img src="{{asset('site')}}/images/partner1 (3).png" alt="">
                </div>
                <div class="item">
                    <img src="{{asset('site')}}/images/partner1 (4).png" alt="">
                </div>
                <div class="item">
                    <img src="{{asset('site')}}/images/partner1 (5).png" alt="">
                </div>
                <div class="item">
                    <img src="{{asset('site')}}/images/partner1 (6).png" alt="">
                </div>
                <div class="item">
                    <img src="{{asset('site')}}/images/partner1 (7).png" alt="">
                </div>

            </div>
        </div>



    </section>
    <!-- end -->
    <!-- questions -->
    <section class="question-section" >
        <div class="main-container">
            <div class="common-questions-head">
                <div class="questions-head">
                    <img src="{{asset('site')}}/images/main-section-icon.svg" alt="">
                    <h1><span>الأسئلة</span> الشائعة</h1>
                </div>

                <a href="questions.html">عرض الكل</a>

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
                <!--  -->

            </div>
        </div>
    </section>
    <!-- end quesion -->
    <!-- conact us -->
    <section class="contact-us">
        <div class="main-container">
            <div class="contact-header">
                <img src="{{asset('site')}}/images/main-section-icon.svg" alt="">
                <h1><span>تواصل</span>  معنا</h1>
            </div>
            <!-- contact-form -->
            <div class="contact-form">
                <div class="main-container">
                    <div class="row">
                        <div class="col-lg-8 col-d-12">
                            <form action="">
                                <div class="input-conainer">
                                    <input type="text" placeholder="الاسم ">
                                    <input type="email" placeholder="البريد الالكتروني">
                                </div>
                                <textarea name="" id="" placeholder="الرسالة"></textarea>
                                <button type="submit">إرسال</button>
                            </form>
                        </div>
                        <div class="col-lg-4 col-md-12  contact-info-container">
                            <!-- contact-info -->
                            <div class="contact-info">
                                <div class="info-item">
                                    <div class="info-img">
                                        <div class="img-container">
                                            <i class="fa-regular fa-envelope"></i>                                            </div>
                                    </div>
                                    <div class="info-text">
                                        <p>البريد الالكتروني</p>
                                        <p>nfo@maqaad.sa</p>
                                    </div>
                                </div>
                                <div class="info-item">
                                    <div class="info-img">
                                        <div class="img-container">
                                            <img src="{{asset('site')}}/images/call.svg" alt="">
                                        </div>
                                    </div>
                                    <div class="info-text">
                                        <p>رقم الهاتف</p>
                                        <p>0500664996</p>
                                    </div>
                                </div>
                                <div class="info-item">
                                    <div class="info-img">
                                        <div class="img-container">
                                            <i class="fa-brands fa-x-twitter"></i>
                                        </div>
                                    </div>
                                    <div class="info-text">
                                        <p>منصة اكس</p>
                                        <p>@MaqaadSA</p>
                                    </div>
                                </div>
                                <div class="info-item">
                                    <div class="info-img">
                                        <img src="{{asset('site')}}/images/insta.svg" alt="">
                                    </div>
                                    <div class="info-text">
                                        <p>الإنستغرام</p>
                                        <p>@MaqaadSA</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
