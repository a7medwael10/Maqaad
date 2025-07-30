@extends('site.layouts.app')
@section('home-active','active')

@section('content')
    <!-- about -->
    <section class="about">
        <div class="main-container">
            <div class="about-header">
                <img src="{{asset('site')}}/images/main-section-icon.svg" alt="">
                <h1> <span> {{ __('about_title') }} </span> {{$generalSettings->trans('site_name')}} </h1>
            </div>
            <div class="about-body">
                <div class="main-container">
                    <div class="about-content">
                        <div class="content-img">
                            <img src="{{asset($generalSettings->about_banner)}}" alt="">
                        </div>
                    </div>
                    <div class="colloms">
                        <img src="{{asset('site')}}/images/about-colloms.svg" alt="">
                        <img src="{{asset('site')}}/images/about-colloms.svg" alt="">
                    </div>
                    <div class="about-text">
                        <h3>
                            <span>“{{$generalSettings->trans('site_name')}}</span> {{$generalSettings->trans('about_long')}}
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
                                        <h4>{{__('our_vision')}}</h4>
                                        <p>{{$generalSettings->trans('vision')}}</p>
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
                                        <h4>{{__('our_message')}}</h4>
                                        <p>{{$generalSettings->trans('mission')}}</p>
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
                                        <h4>{{__('our_goal')}}</h4>
                                        <p>{{$generalSettings->trans('goal')}}</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <a href="{{ route('site.about') }}" class="ctm-btn2">{{ __('learn_more') }}</a>
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
                    <h1><span>{{ __('gallery_title_span') }}</span> {{ __('gallery_title_text') }}</h1>
                </div>
                <a href="{{ route('site.gallery') }}">{{ __('view_all') }}</a>
            </div>
            <!-- gallary images -->
            <div class="row">
                @if($galleries)
                    @foreach($galleries as $gallery)
                        <a href="{{$gallery->images->first()?->image_url}}" data-fancybox="gallery" data-caption="" class="col-lg-4 col-md-6 col-sm-12">
                            <div class="gallary-item">
                                <img src="{{$gallery->images->first()?->image_url}}" alt="">
                            </div>
                        </a>
                    @endforeach
                @endif
            </div>
        </div>
    </section>

    <!-- end gallary -->
    <!-- choosing maqaad -->
    <section class="choosing-maqaad">
        <div class="main-container">
            <div class="choosing-content">
                <div class="choosing-header">
                    <h1><span>{{ __('find_seat_span') }}</span> {{ __('find_seat_text') }}</h1>
                </div>
                <form action="">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12 choosing-item">
                            <label for="">{{ __('form_height_label') }}</label>
                            <input type="text" name="height" placeholder="{{ __('form_height_placeholder') }}">
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 choosing-item">
                            <label for="">{{ __('form_birth_label') }}</label>
                            <div class="input-date">
                                <input type="date" name="birth_date" placeholder="{{ __('form_birth_placeholder') }}">
                                <img src="{{ asset('site') }}/images/calendar.svg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 choosing-item">
                            <label for="">{{ __('form_weight_label') }}</label>
                            <input type="text" name="weight" placeholder="{{ __('form_weight_placeholder') }}">
                        </div>
                    </div>
                    <button id="searchBtn3">{{ __('form_submit') }}</button>
                </form>
            </div>
            @include('site.Seats.list')

        </div>

    </section>


    <section class="banner">
        <div class="banner-img">
            <img src="{{(asset($generalSettings->home_banner))}}" alt="">
        </div>
    </section>
    <!-- news -->
    <section class="news">
        <div class="main-container">
            <div class="news-header">
                <div class="header-title">
                    <img src="{{asset('site')}}/images/main-section-icon.svg" alt="">
                    <h1><span>{{__('news_title')}}</span> {{$generalSettings->trans('site_name')}}</h1>
                </div>
                <a href="{{route('site.news')}}">{{__('view_all')}}</a>
            </div>
            <div class="news-cards">
                <div class="row">
                    @if($news->count() > 0)
                        @foreach($news as $item)
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <a href="{{route('site.news.show',$item->slug)}}" class="news-card">
                                    <div class="card-date">
                                        <p>{{$item->published_at}}</p>
                                    </div>
                                    <div class="card-img">
                                        <img src="{{$item->image_url}}" alt="">
                                    </div>
                                    <div class="card-text">
                                        <h2>{{$item->title}}</h2>
                                        <p>{{$item->content}}</p>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    @else
                        <div class="col-12">
                            <div class="alert alert-info text-center">
                                {{ __('news_empty') }}
                            </div>
                        </div>
                    @endif
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
                        <div class="col-lg-4 col-md-6 col-sm-12 progress-wrapper" data-percent="{{$generalSettings->progress_death_percent}}">
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
                                <p>{{$generalSettings->trans('progress_death')}}</p>
                            </div>
                        </div>
                        <!-- bar -->
                        <div class="col-lg-4 col-md-6 col-sm-12 progress-wrapper" data-percent="{{$generalSettings->progress_injury_percent}}">
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
                                <p>{{$generalSettings->trans('progress_injury')}}</p>
                            </div>

                        </div>
                        <!-- bar -->
                        <div class="col-lg-4 col-md-6 col-sm-12 progress-wrapper" data-percent="{{$generalSettings->progress_use_percent}}">
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
                                <p>{{$generalSettings->trans('progress_use')}}</p>
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
            <h1><span>{{ __('partners_title_first') }}</span> {{ __('partners_title_second') }}</h1>
        </div>

        <div class="partners-container">

            <div class="owl-carousel owl-theme partners-carousel first">
                @if($partners->count() > 0)
                    @foreach($partners as $partner)
                        <div class="item">
                            <img src="{{$partner->image_url}}" alt="">
                        </div>
                    @endforeach
                @endif
            </div>
        </div>

        <!-- seconed carousel -->
        <div class="partners-container">

            <div class="owl-carousel owl-theme partners-carousel seconed">
                @if($partners->count() > 0)
                    @foreach($partners as $partner)
                        <div class="item">
                            <img src="{{$partner->image_url}}" alt="">
                        </div>
                    @endforeach
                @endif
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
                    <h1><span>{{ __('faq_title_first') }}</span> {{ __('faq_title_second') }}</h1>
                </div>

                <a href="{{route('site.questions')}}">{{__('view_all')}}</a>

            </div>
            <div class="ctmx-container">

                <!--  -->
                <div class="questions-common-conatiner">
                    <div class="accordion" id="accordionExample">
                        @foreach($questions as $index => $question)
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button {{ $index !== 0 ? 'collapsed' : '' }}" type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#collapse{{ $index }}"
                                            aria-expanded="{{ $index === 0 ? 'true' : 'false' }}"
                                            aria-controls="collapse{{ $index }}">
                                        {{ $index + 1 }}. {{ $question->question}}
                                    </button>
                                </h2>
                                <div id="collapse{{ $index }}"
                                     class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}"
                                     data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        {{ $question->answer}}
                                    </div>
                                </div>
                            </div>
                        @endforeach
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
                <h1><span>{{ __('contact_title_first') }}</span> {{ __('contact_title_second') }}</h1>
            </div>
            <!-- contact-form -->
            <div class="contact-form">
                <div class="main-container">
                    <div class="row">
                        <div class="col-lg-8 col-d-12">
                            <form action="{{ route('site.contact.store') }}" method="POST" >
                                @csrf
                                <div class="row gx-3">
                                    <div class="col-md-6 col-12">
                                        <div class="input-form w-100">
                                            <input type="text" class="form-control w-100" placeholder="{{ __('name') }}" name="name" value="{{ old('name') }}">
                                            @error('name')
                                            <span class="error text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="input-form w-100">
                                            <input type="text" class="form-control w-100" placeholder="{{ __('email') }}" name="email" value="{{ old('email') }}">
                                            @error('email')
                                            <span class="error text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="input-form">
                                            <textarea name="message" id="message" class="form-control" placeholder="{{ __('message') }}">{{ old('message') }}</textarea>
                                            @error('message')
                                            <span class="error text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <button class="ctm-btn1 mt-2">{{ __('send') }}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-4 col-md-12  contact-info-container">
                            <!-- contact-info -->
                            <div class="contact-info">
                                <div class="info-item">
                                    <div class="info-img">
                                        <div class="img-container">
                                            <i class="fa-regular fa-envelope"></i>
                                        </div>
                                    </div>
                                    <div class="info-text">
                                        <p>{{__('email')}}</p>
                                        <p>{{$generalSettings->contact_email}}</p>
                                    </div>
                                </div>
                                <div class="info-item">
                                    <div class="info-img">
                                        <div class="img-container">
                                            <img src="{{asset('site')}}/images/call.svg" alt="">
                                        </div>
                                    </div>
                                    <div class="info-text">
                                        <p>{{__('phone')}}</p>
                                        <p>{{$generalSettings->contact_phone}}</p>
                                    </div>
                                </div>
                                <div class="info-item">
                                    <div class="info-img">
                                        <div class="img-container">
                                            <i class="fa-brands fa-x-twitter"></i>
                                        </div>
                                    </div>
                                    <div class="info-text">
                                        <p>{{__('x')}}</p>
                                        <p>{{$generalSettings->social_text}}</p>
                                    </div>
                                </div>
                                <div class="info-item">
                                    <div class="info-img">
                                        <img src="{{asset('site')}}/images/insta.svg" alt="">
                                    </div>
                                    <div class="info-text">
                                        <p>{{__('instgram')}}</p>
                                        <p>{{$generalSettings->social_text}}</p>
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
