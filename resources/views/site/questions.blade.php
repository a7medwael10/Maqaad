@extends('site.layouts.app')
@section('questions-active','active')

@section('content')
    <section class="blog-page  mr-section">
        <div class="main-container">
            <div class="about-header-container">
                <div class="sub-section-header">
                    <h1><span>{{ __('faq_title') }}</span></h1>
                    <p>{{ __('faq_description') }}</p>
                </div>
            </div>

            <div class="ctmx-container">

                <div class="questions-common-conatiner">
                    <div class="accordion" id="accordionExample">
                        @foreach($questions as $index => $question)
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button {{ $index !== 0 ? 'collapsed' : '' }}" type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#collapse{{ $index }}"
                                            aria-expanded="{{ $index === 0 ? 'true' : 'false' }}"
                                            aria-controls="collapse{{ $index }}">
                                        {{ $index + 1 }}. {{ $question->question }}
                                    </button>
                                </h2>
                                <div id="collapse{{ $index }}"
                                     class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}"
                                     data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        {{ $question->answer }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
