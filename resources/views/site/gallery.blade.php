@extends('site.layouts.app')
@section('gallery-active','active')

@section('content')
    <!-- gallary-section -->
    <section class="gallary-section">
        <div class="main-container">
            <div class="about-header-container">
                <div class="sub-section-header">
                    <h1><span>{{ __('gallery_title') }}</span> {{ __('gallery_title_suffix') }}</h1>
                    <p>{{ __('gallery_description') }}</p>
                </div>

                <div class="row list">
                    @if($galleries->count() > 0)
                        @foreach($galleries as $gallery)
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <a href="{{$gallery->images->first()?->image_url}}" data-fancybox="gallery-1"
                                   data-caption="{{$gallery->title}}" class="media-container">
                                    <div class="media-img">
                                        <img src="{{$gallery->images->first()?->image_url}}" alt="" lazyload="true" loading="lazy">
                                        <div class="media-time">
                                            <p>{{$gallery->images->count()}}</p>
                                        </div>
                                    </div>
                                    <p>{{$gallery->title}}</p>
                                </a>
                                <div class="d-none">
                                    @if($gallery->images->count() > 0)
                                        @foreach($gallery->images as $image)
                                            <a href="{{$image->image_url}}" data-fancybox="gallery-1"
                                               data-caption="{{$gallery->title}}"></a>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="col-md-12">
                            <div class="no-data">
                                <h3>لا توجد صور في المعرض حاليا.</h3>
                            </div>
                        </div>
                    @endif
                </div>
            </div>

        </div>


    </section>


@endsection
