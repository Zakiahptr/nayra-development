<section class="hero-wrap hero-wrap-2 ftco-degree-bg js-fullheight" style="background-image: url({{ asset('assets/images/bg_4.jpg')}});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="overlay-2"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 mb-5 text-center">
            <h1 class="mb-3 bread">{{ $page }}</h1>
            <p class="breadcrumbs">
                <span class="mr-2">
                    {{ $menu_1 }}
                </span>
                @if (isset($menu_2))
                <span class="mr-2">
                    <i class="ion-ios-arrow-forward mr-2"></i>{{ $menu_2 }}
                </span>
                @endif
                @if (isset($menu_3))
                <span class="mr-2">
                    <i class="ion-ios-arrow-forward mr-2 "></i>{{ $menu_3 }}
                </span>
                @endif
            </p>
            </div>
        </div>
    </div>
</section>
