
@extends('site.layouts.app')

@section('content')

<section class="chossen-page">
    <div class="main-container">
        <div class="chossen-page-header">
            <p><span>اختر</span> المقعد المناسب</p>
            <span> اختيار المقعد المناسب يساعد في الحفاظ على سلامة طفلك في كل رحلة. اتبع دليلنا للعثور على المقعد المثالي لصغيرك.</span>
        </div>
        <div class="chossen-page-content">
            <div class="chossen-form">
                <form action="">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12 choosing-item">
                            <label for="">الاسم</label>
                            <input type="text" name="name" id="name" placeholder="الاسم">
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 choosing-item">
                            <label for="">الطول (سم)</label>
                            <input type="text" placeholder="اسم الطفل">
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 choosing-item">
                            <label for="">تاريخ الولادة </label>
                            <div class="input-date">

                                <input type="date" placeholder="اليوم / الشهر / السنة">
                                <img src="{{asset('site')}}/images/calendar.svg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 choosing-item">
                            <label for="">الوزن (كيلو)</label>
                            <input type="text" placeholder="الوزن(kg)">
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 choosing-item m-auto">
                            <button type="submit">بحث</button>
                        </div>

                    </div>
                </form>
            </div>
            <!-- meqaad-types -->
            <div class="meqaad-types">
                <div class="row ">
                    <div class="col-lg-3 col-md-6 col-sm-12">

                        <div class="meqaad-type-item">
                            <div class="item-img-container">
                                <img src="{{asset('site')}}/images/Baby 1.png" alt="">
                                <img class="mask top-mask" src="{{asset('site')}}/images/Mask group.png" alt="">
                                <img class="mask bottom-mask" src="{{asset('site')}}/images/Mask group.png" alt="">
                                <div class="bg-blur"></div>
                            </div>
                            <div class="item-description">
                                <p>مقعد الأطفال الرضع</p>
                                <div class="description-title">
                                    <div class="title-text">
                                        <img src="{{asset('site')}}/images/calendar.svg" alt="">
                                        <p>العمر:</p>
                                    </div>
                                    <p>الولادة <span>الي</span> عمر سنة</p>
                                </div>
                                <div class="description-title">
                                    <div class="title-text">
                                        <img src="{{asset('site')}}/images/Line.png" alt="">
                                        <p>العمر:</p>
                                    </div>
                                    <p>الولادة <span>الي</span> عمر سنة</p>
                                </div>
                                <div class="description-title">
                                    <div class="title-text">
                                        <img src="{{asset('site')}}/images/masra.png" alt="">
                                        <p>العمر:</p>
                                    </div>
                                    <p>الولادة <span>الي</span> عمر سنة</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12">

                        <div class="meqaad-type-item">
                            <div class="item-img-container">
                                <img src="{{asset('site')}}/images/Baby 1.png" alt="">
                                <img class="mask top-mask" src="{{asset('site')}}/images/Mask group.png" alt="">
                                <img class="mask bottom-mask" src="{{asset('site')}}/images/Mask group.png" alt="">
                                <div class="bg-blur"></div>
                            </div>
                            <div class="item-description">
                                <p>مقعد الأطفال الرضع</p>
                                <div class="description-title">
                                    <div class="title-text">
                                        <img src="{{asset('site')}}/images/calendar.svg" alt="">
                                        <p>العمر:</p>
                                    </div>
                                    <p>الولادة <span>الي</span> عمر سنة</p>
                                </div>
                                <div class="description-title">
                                    <div class="title-text">
                                        <img src="{{asset('site')}}/images/Line.png" alt="">
                                        <p>العمر:</p>
                                    </div>
                                    <p>الولادة <span>الي</span> عمر سنة</p>
                                </div>
                                <div class="description-title">
                                    <div class="title-text">
                                        <img src="{{asset('site')}}/images/masra.png" alt="">
                                        <p>العمر:</p>
                                    </div>
                                    <p>الولادة <span>الي</span> عمر سنة</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">

                        <div class="meqaad-type-item">
                            <div class="item-img-container">
                                <img src="{{asset('site')}}/images/Baby 1.png" alt="">
                                <img class="mask top-mask" src="{{asset('site')}}/images/Mask group.png" alt="">
                                <img class="mask bottom-mask" src="{{asset('site')}}/images/Mask group.png" alt="">
                                <div class="bg-blur"></div>
                            </div>
                            <div class="item-description">
                                <p>مقعد الأطفال الرضع</p>
                                <div class="description-title">
                                    <div class="title-text">
                                        <img src="{{asset('site')}}/images/calendar.svg" alt="">
                                        <p>العمر:</p>
                                    </div>
                                    <p>الولادة <span>الي</span> عمر سنة</p>
                                </div>
                                <div class="description-title">
                                    <div class="title-text">
                                        <img src="{{asset('site')}}/images/Line.png" alt="">
                                        <p>العمر:</p>
                                    </div>
                                    <p>الولادة <span>الي</span> عمر سنة</p>
                                </div>
                                <div class="description-title">
                                    <div class="title-text">
                                        <img src="{{asset('site')}}/images/masra.png" alt="">
                                        <p>العمر:</p>
                                    </div>
                                    <p>الولادة <span>الي</span> عمر سنة</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">

                        <div class="meqaad-type-item">
                            <div class="item-img-container">
                                <img src="{{asset('site')}}/images/Baby 1.png" alt="">
                                <img class="mask top-mask" src="{{asset('site')}}/images/Mask group.png" alt="">
                                <img class="mask bottom-mask" src="{{asset('site')}}/images/Mask group.png" alt="">
                                <div class="bg-blur"></div>
                            </div>
                            <div class="item-description">
                                <p>مقعد الأطفال الرضع</p>
                                <div class="description-title">
                                    <div class="title-text">
                                        <img src="images/calendar.svg" alt="">
                                        <p>العمر:</p>
                                    </div>
                                    <p>الولادة <span>الي</span> عمر سنة</p>
                                </div>
                                <div class="description-title">
                                    <div class="title-text">
                                        <img src="images/Line.png" alt="">
                                        <p>العمر:</p>
                                    </div>
                                    <p>الولادة <span>الي</span> عمر سنة</p>
                                </div>
                                <div class="description-title">
                                    <div class="title-text">
                                        <img src="images/masra.png" alt="">
                                        <p>العمر:</p>
                                    </div>
                                    <p>الولادة <span>الي</span> عمر سنة</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>


<!-- meqaad guide -->
<section class="meqaad-guide">
    <div class="chossen-page-header">
        <p><span>دليل</span>  تركيب المقعد </p>
        <span>تعلم كيفية تركيب مختلف أنواع مقاعد السيارات بشكل صحيح مع دليل الفيديو خطوة بخطوة.</span>
    </div>
    <div class="main-container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <a href="" alt="" class="media-container">
                    <div class="media-img">
                        <img src="{{asset('site')}}/images/video-img.png" alt="">
                        <div class="media-time">
                            <p>00:00</p>
                        </div>
                    </div>
                    <p>طريقة تركيب المقعد المناسبة لطفلك (من يوم إلى 12 شهر)</p>
                </a>
            </div>
            <div class="col-lg-6 col-md-12">
                <a href="" alt="" class="media-container">
                    <div class="media-img">
                        <img src="{{asset('site')}}/images/video-img.png" alt="">
                        <div class="media-time">
                            <p>00:00</p>
                        </div>
                    </div>
                    <p>طريقة تركيب المقعد المناسبة لطفلك (من يوم إلى 12 شهر)</p>
                </a>
            </div>
            <div class="col-lg-6 col-md-12">
                <a href="" alt="" class="media-container">
                    <div class="media-img">
                        <img src="{{asset('site')}}/images/video-img.png" alt="">
                        <div class="media-time">
                            <p>00:00</p>
                        </div>
                    </div>
                    <p>طريقة تركيب المقعد المناسبة لطفلك (من يوم إلى 12 شهر)</p>
                </a>
            </div>
            <div class="col-lg-6 col-md-12">
                <a href="" alt="" class="media-container">
                    <div class="media-img">
                        <img src="{{asset('site')}}/images/video-img.png" alt="">
                        <div class="media-time">
                            <p>00:00</p>
                        </div>
                    </div>
                    <p>طريقة تركيب المقعد المناسبة لطفلك (من يوم إلى 12 شهر)</p>
                </a>
            </div>
        </div>
    </div>
</section>


<!-- guide-help -->
<section class="guide-help">

    <p>هل تحتاج مساعدة في اختيار المقعد المناسب؟</p>
    <span>
                        لدينا فنيون متاحون لمساعدتك في اختيار وتركيب المقعد المثالي لطفلك.
                    </span>

    <div class="guide-links">
        <a href="" class="link ctm-btn1">تواصل معنا</a>
        <a href="" class="link ctm-btn2">تحميل دليل التثبيت</a>
    </div>

</section>
@endsection
