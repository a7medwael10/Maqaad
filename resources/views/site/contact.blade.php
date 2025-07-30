@extends('site.layouts.app')
@section('contact-active','active')

@section('content')

<!-- blog page -->
<section class="blog-page  mr-section">
    <div class="main-container">
        <div class="about-header-container">
            <div class="sub-section-header">
                <h1><span>{{ __('keep_in_touch_title') }}</span></h1>
                <p>{{ __('keep_in_touch_description') }}</p>
            </div>
        </div>

        <div class="contact-us-info">
            <div class="contact-us-info-item">
                <div class="contact-us-info-item-icon">
                    <img src="{{asset('site')}}/images/s1.svg" alt="">
                </div>
                <div class="contact-us-info-item-text">
                    <p>{{__('email')}}</p>
                    <p>{{$generalSettings->contact_email}}</p>
                </div>
            </div>
            <div class="contact-us-info-item">
                <div class="contact-us-info-item-icon">
                    <img src="{{asset('site')}}/images/s2.svg" alt="">
                </div>
                <div class="contact-us-info-item-text">
                    <p>{{__('address')}}</p>
                    <p>{{$generalSettings->trans('contact_address')}}</p>
                </div>
            </div>
            <div class="contact-us-info-item">
                <div class="contact-us-info-item-icon">
                    <img src="{{asset('site')}}/images/s3.svg" alt="">
                </div>
                <div class="contact-us-info-item-text">
                    <p>{{__('phone')}}</p>
                    <p>{{$generalSettings->contact_phone}}</p>
                </div>
            </div>
        </div>

        <div class="contact-us-form">
            <form action="{{ route('site.contact.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="input-form">
                            <input type="text" class="form-control" placeholder="{{__('name')}}" name="name" value="{{ old('name') }}">
                            @error('name')
                            <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="input-form">
                            <input type="text" class="form-control" placeholder="{{__('email')}}" name="email" value="{{ old('email') }}">
                            @error('email')
                            <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="input-form">
                            <textarea name="message" id="message" class="form-control" placeholder="{{__('message')}}">{{ old('message') }}</textarea>
                            @error('message')
                            <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button class="ctm-btn1 mt-2">{{__('send')}}</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
</section>
@endsection
