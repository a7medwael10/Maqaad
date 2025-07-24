@extends('site.layouts.app')

@section('content')

<!-- blog page -->
<section class="blog-page  mr-section">
    <div class="main-container">
        <div class="about-header-container">
            <div class="sub-section-header">
                <h1><span>دعنا</span> نبقى على اتصال</h1>
                <p>إذا كان لديك أي استفسار، لا تتردد في التواصل معنا</p>
            </div>
        </div>

        <div class="contact-us-info">
            <div class="contact-us-info-item">
                <div class="contact-us-info-item-icon">
                    <img src="{{asset('site')}}/images/s1.svg" alt="">
                </div>
                <div class="contact-us-info-item-text">
                    <h2>البريد الالكتروني </h2>
                    <p>info@maqaad.sa</p>
                </div>
            </div>
            <div class="contact-us-info-item">
                <div class="contact-us-info-item-icon">
                    <img src="{{asset('site')}}/images/s2.svg" alt="">
                </div>
                <div class="contact-us-info-item-text">
                    <h2>موقعنا</h2>
                    <p>المملكة العربية السعودية</p>
                </div>
            </div>
            <div class="contact-us-info-item">
                <div class="contact-us-info-item-icon">
                    <img src="{{asset('site')}}/images/s3.svg" alt="">
                </div>
                <div class="contact-us-info-item-text">
                    <h2>رقم الهاتف</h2>
                    <p>0500664996</p>
                </div>
            </div>
        </div>

        <div class="contact-us-form">
            <form action="">
                <div class="row">
                    <div class="col-md-12">
                        <div class="input-form">
                            <input type="text" class="form-control" placeholder="الاسم" name="name">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="input-form">
                            <input type="email" class="form-control" placeholder="البريد الإلكتروني" name="email">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="input-form">
                            <textarea name="message" id="message" class="form-control" placeholder="الرسالة"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button class="ctm-btn1  mt-2">إرسال</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
</section>
@endsection
