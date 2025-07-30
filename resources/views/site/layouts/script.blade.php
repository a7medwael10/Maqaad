<!-- rsponsive menu -->
<div class="overlay"></div>
<section class="responsive-menu" >

    <a href="">
        <img class="logo" src="{{asset($generalSettings->logo)}}" alt="">
    </a>
    <!-- links -->
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


</section>

<!-- bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.min.js" integrity="sha384-VQqxDN0EQCkWoxt/0vsQvZswzTHUVOImccYmSyhJTp7kGtPed0Qcx8rK9h9YEgx+" crossorigin="anonymous"></script>
<!-- owl carousel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<!-- custome -->
<script src="{{asset('site')}}/js/main.js"></script>

<script>
    document.getElementById('searchBtn').addEventListener('click', function (e) {
        e.preventDefault();

        const name = document.querySelector('input[name="name"]')?.value || '';
        const height = document.querySelector('input[name="height"]')?.value || '';
        const weight = document.querySelector('input[name="weight"]')?.value || '';
        const birth_date = document.querySelector('input[name="birth_date"]')?.value || '';

        const params = new URLSearchParams({
            name,
            height,
            weight,
            birth_date
        });
        fetch(`{{ route('site.seats.search') }}?${params.toString()}`, {
            method: 'GET',
        })
            .then(res => res.json())
            .then(data => {
                document.querySelector('.meqaad-types .row').innerHTML = data.html;
            })
            .catch(error => console.error('خطأ في البحث:', error));
    });
</script>


<script>
    document.getElementById('searchBtn3').addEventListener('click', function (e) {
        e.preventDefault();

        const height = document.querySelector('input[name="height"]')?.value || '';
        const weight = document.querySelector('input[name="weight"]')?.value || '';
        const birth_date = document.querySelector('input[name="birth_date"]')?.value || '';

        const params = new URLSearchParams({
            height,
            weight,
            birth_date
        });

        fetch(`{{ route('site.seats.search') }}?${params.toString()}`, {
            method: 'GET',
        })
            .then(res => res.json())
            .then(data => {
                document.querySelector('.meqaad-types .row').innerHTML = data.html;
            })
            .catch(error => console.error('خطأ في البحث:', error));
    });
</script>


<script>
    document.getElementById('searchBtn2').addEventListener('click', function (e) {
        e.preventDefault();

        const name = document.querySelector('input[name="seat_name"]')?.value || '';

        const params = new URLSearchParams({
            name,
        });

        fetch(`{{ route('site.seats.search') }}?${params.toString()}`, {
            method: 'GET',
        })
            .then(res => res.json())
            .then(data => {
                document.querySelector('.meqaad-types .row').innerHTML = data.html;
            })
            .catch(error => console.error('خطأ في البحث:', error));
    });
</script>
