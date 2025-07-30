
@extends('site.layouts.app')

@section('content')

<section class="chossen-page">
    <div class="main-container">
        <div class="chossen-page-header">
            <p><span>{{ __('find_seat_span') }}</span> {{ __('find_seat_text') }}</p>
            <span>{{ __('seat_guide_message') }}</span>
        </div>
        <div class="chossen-page-content">
            <div class="chossen-form">
                <form id="seatSearchForm">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12 choosing-item">
                            <label for="">{{__('name')}}</label>
                            <input type="text" name="name" id="name" placeholder="{{__('name')}}">
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 choosing-item">
                            <label for="">{{ __('form_height_label') }}</label>
                            <input type="text" name="height" placeholder="{{ __('form_height_placeholder') }}">
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 choosing-item">
                            <label for="">{{ __('form_birth_label') }}</label>
                            <div class="input-date">
                                <input type="date" name="birth_date" placeholder="{{ __('form_birth_placeholder') }}">
                                <img src="{{asset('site')}}/images/calendar.svg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 choosing-item">
                            <label for="">{{ __('form_weight_label') }}</label>
                            <input type="text" name="weight" placeholder="{{ __('form_weight_placeholder') }}">
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 choosing-item m-auto">
                            <button id="searchBtn">{{ __('form_submit') }}</button>
                        </div>

                    </div>
                </form>
            </div>
            <!-- meqaad-types -->
                @include('site.Seats.list')
        </div>
    </div>
</section>


<!-- meqaad guide -->
<section class="meqaad-guide">
    <div class="chossen-page-header">
        <p><span>{{ __('install_seat_title') }}</span></p>
        <span>{{ __('install_seat_description') }}</span>
    </div>
    <div class="main-container">
        <div class="row">
           @if($seatInstallations->count() > 0)
               @foreach($seatInstallations as $installation)
                    <div class="col-lg-6 col-md-12">
                        <a href="{{$installation->link}}" alt="" class="media-container">
                            <div class="media-img">
                                <img src="{{$installation->image_url}}" alt="">
                                <div class="media-time">
                                    <p>{{$installation->duration}}</p>
                                </div>
                            </div>
                            <p>{{$installation->name}}</p>
                        </a>
                    </div>
                @endforeach
               @endif

        </div>
</section>


<!-- guide-help -->
<section class="guide-help">

    <p>{{ __('need_help') }}</p>
    <span>{{ __('need_help_description') }}</span>

    <div class="guide-links">
        <a href="{{route('site.contact')}}" class="link ctm-btn1">{{ __('contact_us') }}</a>
        <a href="{{asset($generalSettings->installation_doc)}}" class="link ctm-btn2">{{ __('download_guide') }}</a>
    </div>

</section>

@endsection
