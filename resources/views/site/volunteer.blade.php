@extends('site.layouts.app')

@section('content')
    <section class="login-section" style="background-image: url({{asset('site')}}/images/bg-login.png);">
        <div class="main-container">
            <div class="login-content form-login">
                <a href="index.html" class="logo-form-login">
                    <img src="{{asset('site')}}/images/Logo.svg" alt="">
                </a>
                <div class="form-login-header">
                    <form action="">
                        <div class="input-form">
                            <label for="name">الاسم الأول</label>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                        <div class="input-form">
                            <label for="email">البريد الالكتروني</label>
                            <input type="email" class="form-control" placeholder="">
                        </div>
                        <div class="input-form">
                            <label for="phone">رقم الهاتف</label>
                            <input type="tel" class="form-control" placeholder="">
                        </div>
                        <div class="input-form">
                            <label for="address">العنوان</label>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                        <div class="btn-login">
                            <button type="submit" class="ctm-btn1 w-100">إرسال</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
