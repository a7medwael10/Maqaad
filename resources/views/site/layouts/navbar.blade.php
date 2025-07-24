<header class="sub-header">
    <div class="top-bar">
        <div class="main-container">
            <a href="">
                <img class="logo" src="{{asset('site')}}/images/Logo.svg" alt="">
            </a>
            <div class="top-bar-right">
                <div class="social-icons">
                    <a href="#">MaqaadSA@</a>
                    <a class="media-icons" href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a class="media-icons" href="#"><i class="fa-brands fa-x-twitter"></i></a>
                </div>
            </div>
        </div>
    </div>
    <nav>
        <div class="main-container nav-container">

            <ul class="nav-list">
                <li><a href="{{route('site.home')}}">الرئيسية</a></li>
                <li><a href="{{route('site.about')}}">عن مَقعد</a></li>
                <li><a href="{{route('site.choose-seat')}}">اختر المقعد المناسب</a></li>
                <li><a href="{{route('site.gallery')}}"> المعرض </a></li>
                <li><a href="{{route('site.news')}}">الاخبار</a></li>
                <li><a href="{{route('site.blogs')}}"> المدونه </a></li>
                <li><a href="{{route('site.questions')}}">الأسئلة الشائعة</a></li>
                <li><a href="{{route('site.contact')}}">تواصل معنا</a></li>
            </ul>
            <form class="search-bar">
                <input type="text" placeholder="بحث في مَقعد" class="search-input">
                <button class="search-button"><img src="{{asset('site')}}/images/search-normal.svg" alt=""></i></button>
            </form>

            <div class="show-menu">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>
    </nav>
    <!-- hero -->
    @if (Request::is('/'))
        @include('site.layouts.hero')
    @endif
</header>
