<section class="ftco-section ftco-fullwidth mb-5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                <span class="subheading">Keunggulan</span>
                <h2 class="mb-2">Mengapa Harus Memilih Kami?</h2>
            </div>
        </div>
    </div>

    <div class="container-fluid px-0">
        <div class="row d-md-flex text-wrapper align-items-stretch">
            <div class="col-md-6 mb-md-0 mb-4 img d-flex align-self-stretch lign-items-center"
                style="background-image: url({{ asset('assets/images/key_house.jpg')}}); ">
            </div>
            <div class="col-md-6 half-text d-flex justify-content-end align-items-center">
                <div class="text-inner pl-md-3">
                    <div class="row d-flex">
                        @foreach ($services as $service)
                        <div class="col-md-12 d-flex align-self-stretch ftco-animate">
                            <div class="media block-6 services-wrap d-flex ml-3">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <img src="{{ $service->serviceIcon()}}" width="50px">
                                </div>
                                <div class="media-body pl-4">
                                    <h3>{{ $service->service_title }}</h3>
                                    <p>{{ $service->service_desc }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="col-md-12 d-flex justify-content-center ftco-animate">
                            <div class="text-center">
                                <p><a href="{{ route('about') }}" class="btn btn-primary py-3 px-4">Lihat Selengkapnya</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
