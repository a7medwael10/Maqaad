<footer>
    <div class="main-container">
        <div class="top-footer">
            <div class="footer-img">
                <img class="logo" src="{{asset($generalSettings->logo)}}" alt="">
            </div>
            <div class="footer-links">
                <ul class="nav-list">
                    <li><a href="{{route('site.home')}}">{{ __('home') }}</a></li>
                    <li><a href="{{route('site.about')}}">{{ __('about') }}</a></li>
                    <li><a href="{{route('site.seats.index')}}">{{ __('choose_seat') }}</a></li>
                    <li><a href="{{route('site.gallery')}}">{{ __('gallery') }}</a></li>
                    <li><a href="{{route('site.news')}}">{{ __('news') }}</a></li>
                    <li><a href="{{route('site.blogs')}}">{{ __('blog') }}</a></li>
                    <li><a href="{{route('site.questions')}}">{{ __('faq') }}</a></li>
                    <li><a href="{{route('site.contact')}}">{{ __('contact_us') }}</a></li>
                </ul>
            </div>
        </div>
        <div class="end-footer">
            <p>{{$generalSettings->trans('terms_desc')}}</p>
            <div class="social-footer-icons">
                <a href="{{$generalSettings->social_twitter}}">MaqaadSA@</a>
                <a class="media-icons" href="{{$generalSettings->social_twitter}}"><i class="fa-brands fa-x-twitter"></i></a>
                <a class="media-icons" href="{{$generalSettings->social_instagram}}"><i class="fa-brands fa-instagram"></i></a>
                <a class="media-icons" href="{{$generalSettings->social_youtube}}"><i class="fa-brands fa-youtube"></i></a>
            </div>
        </div>
    </div>
    </div>
    <img class="face" src="{{asset('site')}}/images/Mask group (1).png" alt="">
    <img class="shape" src="{{asset('site')}}/images/footer shape.svg" alt="">
</footer>
