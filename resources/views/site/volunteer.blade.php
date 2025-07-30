@extends('site.layouts.app')

@section('content')
    <section class="login-section" style="background-image: url({{asset('site')}}/images/bg-login.png);">
        <div class="main-container">
            <div class="login-content form-login">
                <a href="{{route('site.home')}}" class="logo-form-login">
                    <img src="{{asset('site')}}/images/Logo.svg" alt="">
                </a>
                <div class="form-login-header">
                    <form action="{{ route('site.volunteer.store') }}" method="POST" id="volunteerForm">
                        @csrf
                        <div class="input-form">
                            <label for="name">{{__('name')}}</label>
                            <input type="text" class="form-control" placeholder="" id="name" name="name" value="{{ old('name') }}">
                            @error('name') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="input-form">
                            <label for="email">{{__('name')}}</label>
                            <input type="email" class="form-control" placeholder="" id="email" name="email" value="{{ old('email') }}">
                            @error('email') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="input-form">
                            <label for="phone">{{__('phone')}}</label>
                            <input type="tel" class="form-control" placeholder="" id="phone" name="phone" value="{{ old('phone') }}">
                            @error('phone') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="input-form">
                            <label for="address">{{__('address')}}</label>
                            <input type="text" class="form-control" placeholder="" id="address" name="address" value="{{ old('address') }}">
                            @error('address') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div id="form-messages" class="my-2"></div>
                        <div class="btn-login">
                            <button type="submit" class="ctm-btn1 w-100">إرسال</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
