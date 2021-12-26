@php( $homeSlide = $homeSlides->first())
<div class="bg-light">
    <div class="container py-9">
        <div class="row">
            <div class="col-lg-4 d-flex align-items-center">
                <div class="card card-body shadow p-4 me--5">
                    <h1 class=" ">{{ $homeSlide->title }}</h1>
                    @if ($homeSlide->subtitle)
                        <p class="">{{ $homeSlide->subtitle }}</p>
                    @endif
                    <div>
                        <a href="" class="btn btn-outline-primary">Notre menu</a>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-start mt-4">
                        <i class="fal fa-2x fa-phone text-primary "></i>
                        <i class="fab fa-2x fa-facebook-messenger text-primary  mx-4"></i>
                        <i class="fab fa-2x fa-instagram text-primary "></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <img src="{{ $homeSlide->image_url }}" alt="" class="img-fluid rounded">
            </div>
        </div>
    </div>
</div>
@push('scripts')

@endpush
