<div class="meqaad-types">
    <div class="row">
        @if($seats && count($seats) > 0)
            @foreach($seats as $seat)
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="meqaad-type-item">
                        <div class="item-img-container">
                            <img src="{{$seat->image_url}}" alt="">
                            <img class="mask top-mask" src="{{ asset('site/images/Mask group.png') }}" alt="">
                            <img class="mask bottom-mask" src="{{ asset('site/images/Mask group.png') }}" alt="">
                            <div class="bg-blur"></div>
                        </div>
                        <div class="item-description">
                            <p>{{$seat->name}}</p>
                            <div class="description-title">
                                <div class="title-text">
                                    <img src="{{ asset('site/images/calendar.svg') }}" alt="">
                                    <p>{{__('age')}}:</p>
                                </div>
                                <p>{{$seat->age_range}}</p>
                            </div>
                            @if($seat->weight)
                                <div class="description-title">
                                    <div class="title-text">
                                        <img src="{{ asset('site/images/Line.png') }}" alt="">
                                        <p>{{__('weight')}}:</p>
                                    </div>
                                    <p>{{ $seat->weight_text }}</p>
                                </div>
                            @endif
                            @if($seat->height)
                                <div class="description-title">
                                    <div class="title-text">
                                        <img src="{{ asset('site/images/masra.png') }}" alt="">
                                        <p>{{__('height')}}:</p>
                                    </div>
                                    <p>{{ $seat->height }} {{__('cm')}}</p>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="col-12">
                <div class="alert alert-danger text-center">
                    <p>{{ __('no_seats_available') }}</p>
                </div>
            </div>
        @endif
    </div>

</div>
