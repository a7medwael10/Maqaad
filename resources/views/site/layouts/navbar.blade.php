<header class="sub-header">
    <div class="top-bar">
        <div class="main-container">
            <a href="">
                <img class="logo" src="{{asset($generalSettings->logo)}}" alt="">
            </a>
            <div class="top-bar-right">
                <div class="social-icons">
                    <a href="#">{{$generalSettings->social_text}}</a>
                    <a class="media-icons" href="{{$generalSettings->social_instagram}}"><i class="fa-brands fa-instagram"></i></a>
                    <a class="media-icons" href="{{$generalSettings->social_twitter}}"><i class="fa-brands fa-x-twitter"></i></a>
                </div>

                <!-- Language Switcher -->
                <div class="language-switcher" style="margin-right: 15px;">
                    <a href="{{ route('change.language', 'ar') }}"
                       class="{{ app()->getLocale() === 'ar' ? 'active' : '' }}"
                       style="margin-left: 5px; font-weight: bold;">
                        العربية
                    </a>
                    |
                    <a href="{{ route('change.language', 'en') }}"
                       class="{{ app()->getLocale() === 'en' ? 'active' : '' }}"
                       style="margin-left: 5px; font-weight: bold;">
                        English
                    </a>
                </div>
                <!-- End Language Switcher -->
            </div>
        </div>
    </div>

    <nav>
        <div class="main-container nav-container">
            <ul class="nav-list">
                <li><a class="@yield('home-active')" href="{{route('site.home')}}">{{ __('home') }}</a></li>
                <li><a  class="@yield('about-active')" href="{{route('site.about')}}">{{ __('about') }}</a></li>
                <li><a  class="@yield('seat-active')" href="{{route('site.seats.index')}}">{{ __('choose_seat') }}</a></li>
                <li><a  class="@yield('gallery-active')" href="{{route('site.gallery')}}">{{ __('gallery') }}</a></li>
                <li><a  class="@yield('news-active')" href="{{route('site.news')}}">{{ __('news') }}</a></li>
                <li><a  class="@yield('blogs-active')" href="{{route('site.blogs')}}">{{ __('blog') }}</a></li>
                <li><a  class="@yield('questions-active')" href="{{route('site.questions')}}">{{ __('faq') }}</a></li>
                <li><a  class="@yield('contact-active')" href="{{route('site.contact')}}">{{ __('contact_us') }}</a></li>
            </ul>

            <form class="search-bar" id="seatSearchForm">
                <input type="text" placeholder="{{__('search_placeholder')}}" class="search-input" name="seat_name" id="name">
                <button class="search-button" id="searchBtn2">
                    <img src="{{asset('site')}}/images/search-normal.svg" alt="">
                </button>
            </form>

            <div class="show-menu">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>
    </nav>

    @if (Request::is('/'))
        @include('site.layouts.hero')
    @endif
</header>
