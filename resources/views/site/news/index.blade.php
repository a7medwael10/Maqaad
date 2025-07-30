@extends('site.layouts.app')

@section('content')
    <!-- news -->
    <section class="news">
        <div class="main-container">
            <div class="sub-section-header">
                <h1><span>{{ __('latest') }}</span> {{ __('our_news') }}</h1>
                <p>{{ __('news_description') }}</p>
            </div>
            <div class="news-cards">
                <div class="row gy-3">
                    @if($news->count() > 0)
                        @foreach($news as $item)
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <a href="{{route('site.news.show',$item->slug)}}" class="news-card">
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
                                </a>
                            </div>
                        @endforeach
                    @else
                        <div class="col-12">
                            <div class="alert alert-info text-center">
                                لا توجد أخبار حالياً.
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

@endsection
