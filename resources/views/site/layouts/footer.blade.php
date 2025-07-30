<footer>
    <div class="main-container">
        <div class="top-footer">
            <div class="footer-img">
                <img class="logo" src="{{asset($generalSettings->logo)}}" alt="">
            </div>
            <div class="footer-links">
                <ul class="nav-list">
                    <li><a href="{{route('site.home')}}">{{ __('home') }}</a></li>
                    <li><a href="{{route('site.about')}}">{{ __('about') }}</a></li>
                    <li><a href="{{route('site.seats.index')}}">{{ __('choose_seat') }}</a></li>
                    <li><a href="{{route('site.gallery')}}">{{ __('gallery') }}</a></li>
                    <li><a href="{{route('site.news')}}">{{ __('news') }}</a></li>
                    <li><a href="{{route('site.blogs')}}">{{ __('blog') }}</a></li>
                    <li><a href="{{route('site.questions')}}">{{ __('faq') }}</a></li>
                    <li><a href="{{route('site.contact')}}">{{ __('contact_us') }}</a></li>
                </ul>
            </div>
        </div>
        <div class="end-footer">
            <p>{{$generalSettings->trans('terms_desc')}}</p>
            <div class="social-footer-icons">
                <a href="{{$generalSettings->social_twitter}}">MaqaadSA@</a>
                <a class="media-icons" href="{{$generalSettings->social_twitter}}"><i class="fa-brands fa-x-twitter"></i></a>
                <a class="media-icons" href="{{$generalSettings->social_instagram}}"><i class="fa-brands fa-instagram"></i></a>
                <a class="media-icons" href="{{$generalSettings->social_youtube}}"><i class="fa-brands fa-youtube"></i></a>
            </div>
        </div>
    </div>
    </div>
    <img class="face" src="{{asset('site')}}/images/Mask group (1).png" alt="">
    <img class="shape" src="{{asset('site')}}/images/footer shape.svg" alt="">
</footer>


<script>
    document.addEventListener("DOMContentLoaded", function () {
        const form = document.getElementById("contactForm");
        const messages = document.getElementById("form-messages");

        form.addEventListener("submit", function (e) {
            e.preventDefault();

            const formData = new FormData(form);

            // مسح الرسائل السابقة
            messages.innerHTML = "";
            form.querySelectorAll(".error").forEach(el => el.remove());

            fetch("{{ route('site.contact.store') }}", {
                method: "POST",
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Accept': 'application/json'
                },
                body: formData
            })
                .then(async response => {
                    const data = await response.json();

                    if (response.ok) {
                        form.reset();
                        messages.innerHTML = `<div class="alert alert-success">{{ __('message_sent_successfully') }}</div>`;
                    } else if (response.status === 422) {
                        for (let field in data.errors) {
                            const input = form.querySelector(`[name="${field}"]`);
                            if (input) {
                                const errorSpan = document.createElement("span");
                                errorSpan.classList.add("error", "text-danger", "d-block", "mt-1");
                                errorSpan.innerText = data.errors[field][0];
                                input.parentNode.appendChild(errorSpan);
                            }
                        }
                    } else {
                        messages.innerHTML = `<div class="alert alert-danger">{{ __('unexpected_error_occurred') }}</div>`;
                    }
                })
                .catch((error) => {
                    console.error("Network error:", error);
                    messages.innerHTML = `<div class="alert alert-danger">{{ __('network_error') }}</div>`;
                });

        });
    });
</script>
