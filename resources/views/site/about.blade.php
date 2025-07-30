@extends('site.layouts.app')
@section('about-active','active')

@section('content')

    <!-- about -->
    <section class="about">
        <div class="main-container">
            <div class="about-header-container">
                <div class="sub-section-header">
                    <h1> <span> {{ __('about_title') }} </span> {{$generalSettings->trans('site_name')}} </h1>
                    <p>{{$generalSettings->trans('about_short')}}</p>
                </div>
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
                    <h1><span>{{ __('partners_title_first') }}</span> {{ __('partners_title_second') }}</h1>
                    <p>{{ __('partners_paragraph') }}</p>
                </div>
            </div>
            <div class="success-partners-body">
                <div class="row body-container">
                    @if($partners->count() > 0)
                        @foreach($partners as $partner)
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="partner-item">
                                    <img src="{{$partner->image_url}}" alt="">
                                    <p>{{$partner->name}}</p>
                                    <a href="{{$partner->link}}" target="_blank">
                                        <span>{{ __('website_link') }}</span>
                                        <img src="{{asset('site')}}/images/send.svg" alt="">
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
                </div>

            </div>

        </div>

    </section>
@endsection
