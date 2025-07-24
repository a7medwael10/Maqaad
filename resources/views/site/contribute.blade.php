@extends('site.layouts.app')

@section('content')
    <section class="login-section" style="background-image: url({{asset('site')}}/images/bg-login.png);">
        <div class="main-container">
            <div class="login-content">
                <div class="logo-login">
                    <img src="{{asset('site')}}/images/Logo.svg" alt="">
                </div>
                <div class="btn-login">
                    <a href="contribute-us.html" class="ctm-btn1 w-100">تطوع الآن</a>
                    <a href="#" class="ctm-btn2 w-100"> تبرع الآن</a>
                </div>
            </div>
        </div>
    </section>
@endsection
