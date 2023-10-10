<section class="mt-0 pb-5 mb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                <span class="subheading">Galeri</span>
            <h2 class="mb-2">Galeri Perumahan Kami</h2>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12">
                <div class="carousel-costum owl-carousel ftco-owl">
                    @foreach ($galleries as $gallery)
                    <div class="item">
                        <div class="item">
                            <img src="{{ $gallery->image() }}">
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
