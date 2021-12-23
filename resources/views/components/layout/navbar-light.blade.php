<nav class="navbar navbar-bg-class navbar-expand-lg navbar-light py-4 fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Restaurant</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">A propos de nous</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" >Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" >Contact</a>
                </li>
            </ul>
        </div>
        <ul class="navbar-nav ms-auto me-0 mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fab fa-facebook"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" ><i class="fab fa-instagram"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" ><i class="fa fa-phone"></i></a>
            </li>
        </ul>
    </div>
</nav>
@push('scripts')
    <script>
        $(document).scroll(function () {
            let $nav = $(".navbar-bg-class");

            // $nav.toggleClass('navbar-expanded', $(this).scrollTop() > ($nav.height())*0.6);
            if ($(this).scrollTop() < ($nav.height())){
                $nav.addClass("bg-transparent");
                $nav.removeClass("bg-light");
            }

            if ($(this).scrollTop() > ($nav.height())){
                $nav.removeClass("bg-transparent");
                $nav.addClass("bg-light");
            }
        });

    </script>
    @endpush
