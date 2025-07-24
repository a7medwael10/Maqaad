@extends('site.layouts.app')

@section('content')
    <!-- gallary-section -->
    <section class="gallary-section">
        <div class="main-container">
            <div class="about-header-container">
                <div class="sub-section-header">
                    <h1><span>معرض</span> الصور</h1>
                    <p>يمكنكم الاطلاع على معرض الصور وما يحوي من صور فوتوغرافية متنوعة من قلب الحدث.​</p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <a href="{{asset('site')}}/images/video-img.png" alt="" data-fancybox="gallery" data-caption="" class="media-container">
                            <div class="media-img">
                                <img src="{{asset('site')}}/images/video-img.png" alt="">
                                <div class="media-time">
                                    <p>00:00</p>
                                </div>
                            </div>
                            <p>طريقة تركيب المقعد المناسبة لطفلك (من يوم إلى 12 شهر)</p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <a href="{{asset('site')}}/images/video-img.png" alt="" data-fancybox="gallery" data-caption="" class="media-container">
                            <div class="media-img">
                                <img src="{{asset('site')}}/images/video-img.png" alt="">
                                <div class="media-time">
                                    <p>00:00</p>
                                </div>
                            </div>
                            <p>طريقة تركيب المقعد المناسبة لطفلك (من يوم إلى 12 شهر)</p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <a href="{{asset('site')}}/images/video-img.png" alt="" data-fancybox="gallery" data-caption="" class="media-container">
                            <div class="media-img">
                                <img src="{{asset('site')}}/images/video-img.png" alt="">
                                <div class="media-time">
                                    <p>00:00</p>
                                </div>
                            </div>
                            <p>طريقة تركيب المقعد المناسبة لطفلك (من يوم إلى 12 شهر)</p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <a href="{{asset('site')}}/images/video-img.png" data-fancybox="gallery" data-caption=""  alt="" class="media-container">
                            <div class="media-img">
                                <img src="{{asset('site')}}/images/video-img.png" alt="">
                                <div class="media-time">
                                    <p>00:00</p>
                                </div>
                            </div>
                            <p>طريقة تركيب المقعد المناسبة لطفلك (من يوم إلى 12 شهر)</p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <a href="{{asset('site')}}/images/video-img.png" data-fancybox="gallery" data-caption="" alt="" class="media-container">
                            <div class="media-img">
                                <img src="{{asset('site')}}/images/video-img.png" alt="">
                                <div class="media-time">
                                    <p>00:00</p>
                                </div>
                            </div>
                            <p>طريقة تركيب المقعد المناسبة لطفلك (من يوم إلى 12 شهر)</p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
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

        </div>


    </section>


@endsection
