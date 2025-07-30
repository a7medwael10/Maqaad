@extends('site.layouts.app')
@section('blogs-active','active')

@section('content')
    <!-- blog page -->
    <section class="blog-details-page  mr-section">
        <div class="main-container">
            <div class="blog-container">
                <div class="sub-section-header">
                    <h1>{{$blog->title}}</h1>
                    <p>{{$blog->published_at}}</p>
                </div>
            </div>

            <div class="text-details">
                <p>{{$blog->content}}</p>
            </div>

            <div class="more-blog mr-section">
                <h2 class="sub-header-title">{{ __('other_blogs') }}</h2>

                <div class="owl-carousel owl-theme " id="more-blog">
                    @if($latestBlogs->count() > 0)
                        @foreach($latestBlogs as $blog)
                            <div class="item">
                                <div class="item">
                                    <a href="{{route('site.blogs.show', $blog->slug)}}">
                                        <div class="sub-blog-item">
                                            <h4>{{$blog->published_at}}</h4>
                                            <h2>{{$blog->title}}</h2>
                                            <p>{{$blog->content}} </p>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
