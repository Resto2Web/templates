
<div class="swiper-container swiper-hero">
    <div class="swiper-wrapper">
        @foreach ($homeSlides as $homeSlide)
            <div class="swiper-slide  ">
                <div class="d-flex justify-content-center align-items-center " style="background-image: linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.2)),url({{ $homeSlide->getFirstMediaUrl('image') }});
                background-position: center;
                height: 80vh;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                background-size: cover;
                -o-background-size: cover;">
                    <div class="text-white text-center">
                        <h1 class=" ">{{ $homeSlide->title }}</h1>
                        @if ($homeSlide->subtitle)
                            <h2 class="">{{ $homeSlide->subtitle }}</h2>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="swiper-pagination"></div>

    <div class="swiper-button-prev-product"></div>
    <div class="swiper-button-next-product"></div>
</div>
@push('scripts')
    <script>
        const swiper = new Swiper('.swiper-hero', {
            loop: true,
            slidesPerView: 1,
            centeredSlides: false,
            autoplay: true,
            navigation: {
                nextEl: '.swiper-button-next-hero',
                prevEl: '.swiper-button-prev-hero',
            },
            pagination: {
                el: '.swiper-pagination',
                type: 'bullets',
            },
        });
    </script>
@endpush
