@php( $homeSlide = $homeSlides->first())
<div class="" style="background-image: url('{{ $homeSlide->getFirstMediaUrl('image') }}'); background-size: cover ;background-attachment: fixed">
    <div class="container py-9">

        <div class="text-center text-white">
            <img src="https://lafka.althemist.com/sushi/wp-content/uploads/sites/8/2019/05/sushi_kanji_white.png" alt="" class="img-fluid">
            <h1 class=" ">{{ $homeSlide->title }}</h1>
            @if ($homeSlide->subtitle)
                <p class="">{{ $homeSlide->subtitle }}</p>
            @endif
            <div>
                <a href="" class="btn btn-primary">Notre menu</a>
            </div>
        </div>
        {{--            <div class="col-lg-8">--}}
        {{--                <img src="{{ $homeSlide->getFirstMediaUrl('image') }}" alt="" class="img-fluid rounded">--}}
        {{--            </div>--}}

    </div>
    <div class="overflow-hidden bg-transparent">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" fill="var(--bs-dark)" preserveAspectRatio="none" width="100vw" height="10vh">
            <path d="M600,112.77C268.63,112.77,0,65.52,0,7.23V120H1200V7.23C1200,65.52,931.37,112.77,600,112.77Z" class="shape-fill"></path>
        </svg>
    </div>
    <div>

    </div>
</div>
