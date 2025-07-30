@extends('site.layouts.app')

@section('content')
    <section class="login-section" style="background-image: url({{asset('site')}}/images/bg-login.png);">
        <div class="main-container">
            <div class="login-content">
                <div class="logo-login">
                    <img src="{{asset('site')}}/images/Logo.svg" alt="">
                </div>
                <div class="btn-login">
                    <a href="{{ route('site.volunteer.create') }}" class="ctm-btn1 w-100">{{ __('volunteer_now') }}</a>
                    <a href="#" class="ctm-btn2 w-100">{{ __('donate_now') }}</a>
                </div>
            </div>
        </div>
    </section>
@endsection
