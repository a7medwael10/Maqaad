<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">
@include('site.layouts.header')
    <body>
        <main id="main-content">
        <!-- BEGIN: Content-->
        @if (!Request::is('contribute') && !Request::is('volunteer'))
            @include('site.layouts.navbar')
        @endif

        @yield('content')

        <!-- END: Content-->
        @if (!Request::is('contribute') && !Request::is('volunteer'))
            @include('site.layouts.footer')
        @endif

        @include('site.layouts.script')

        </main>
    </body>
</html>
