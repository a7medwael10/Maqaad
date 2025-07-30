@extends('site.layouts.app')
@section('blogs-active','active')

@section('content')
    <!-- blog page -->
    <section class="blog-page  mr-section">
        <div class="main-container">
            <div class="about-header-container">
                <div class="sub-section-header">
                    <h1><span>{{ __('latest_blog') }}</span></h1>
                    <p>{{ __('blog_paragraph') }}</p>
                </div>
            </div>

            <div class="blog-page-content">
                <div class="row row-gap">
                    @if($blogs->count() > 0)
                        @foreach($blogs as $blog)
                            <div class="col-lg-4 col-md-6 ">
                                <a href="{{ route('site.blogs.show', $blog->slug) }}">
                                    <div class="sub-blog-item">
                                        <h4>{{$blog->published_at}}</h4>
                                        <h2>{{$blog->title}}</h2>
                                        <p>{{$blog->content}} </p>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    @else
                        <div class="col-12">
                            <div class="no-data">
                                <h2>لا توجد مدونات متاحة حاليا</h2>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
