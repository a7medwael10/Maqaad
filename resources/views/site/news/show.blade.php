@extends('site.layouts.app')
@section('news-active','active')

@section('content')

    <!-- media center -->
    <section class="media-center-details">
        <div class="main-container">
            <div class="sub-section-header">
                <h1>{{$new->title}}</h1>
                <p>{{$new->published_at}}</p>
            </div>
            <div class="media-details-content">
                <div class="media-details-image">
                    <img src="{{$new->image_url}}" alt="">
                </div>
                <div class="media-details-text">
                    <p>
                        {{$new->content}}
                    </p>
                </div>
            </div>
        </div>
    </section>


    <!-- news -->
    <section class="news">
        <div class="main-container">
            <h2 class="sub-header-title">{{ __('more_news') }}</h2>
            <div class="news-cards">
                <div class="owl-carousel owl-theme " id="more-blog">
                    @if($latestNews->count() > 0)
                        @foreach($latestNews as $item)
                            <div class="item">
                                <div class="news-card">
                                    <div class="card-date">
                                        <p>{{$item->published_at}}</p>
                                    </div>
                                    <div class="card-img">
                                        <img src="{{$item->image_url}}" alt="">
                                    </div>
                                    <div class="card-text">
                                        <h2>{{$item->title}}</h2>
                                        <p>{{$item->content}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>


@endsection
