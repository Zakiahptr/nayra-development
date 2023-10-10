<section class="ftco-section">
    <div class="bg-light" style="padding-top: 6em; padding-bottom:6em;">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Testimonial</span>
                <h2 class="mb-3">Yang Dikatakan Klien Kami</h2>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-costum owl-carousel ftco-owl">
                        @foreach ($testimonials as $testimonial)
                        <div class="item">
                            <div class="testimony-wrap py-4 mb-5">
                                <div class="text">
                                    <p class="mb-4">"{{ $testimonial->testimoni }}"</p>
                                    <div class="align-items-center border-top">
                                        <div class="text-center mt-3">
                                            <p class="name">{{ $testimonial->client_name }}</p>
                                            <span class="position">{{ $testimonial->client_job }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


