
<section id="perumahan" class="ftco-section goto-here">
    <div  class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                <span class="subheading">Penawaran Kami</span>
                <h2 class="mb-2">Perumahan Terbaru</h2>
            </div>
        </div>
        <div class="row">
            @foreach ($residences as $residence)
            @if ($residence->residence_status == 'tersedia')
            @if ($loop->iteration <= 3)
            <div class="col-md-4">
                <a href="{{ route('residence.detail', $residence->slug) }}">
                <div class="property-wrap ftco-animate">
                    <div class="img d-flex align-items-center justify-content-center"
                    style="background-image: url({{ $residence->featuredImage() }});">
                        <div class="icon d-flex align-items-center justify-content-center btn-custom">
                            <span class="ion-ios-link"></span>
                        </div>
                    </div>
                    <div class="text">
                        <h3 class="mb-0">{{ $residence->residence_name }}</h3>
                        <span class="location d-inline-block mb-3">
                            <i class="ion-ios-pin mr-2"></i>{{ $residence->address }}
                        </span>
                        <ul class="property_list text-muted">
                            <li><i class="fas fa-home mr-2"></i>{{ $residence->types->count() }} Tipe Unit
                            {{-- <li><span class="flaticon-bed"></span>{{ $residence->bedroom }}</li>
                            <li><span class="flaticon-bathtub"></span>{{ $residence->bathroom }}</li>
                            <li><span class="flaticon-floor-plan"></span>{{ $residence->floor }}</li> --}}
                        </ul>
                        <div class="clearfix pt-2 border-top ">
                            <span class="float-left">Mulai Dari</span>
                            <span class="float-right">Rp. {{ number_format(collect($residence->types)->min('price'),0,',','.') }}</span>
                        </div>
                    </div>
                </div>
                </a>
            </div>
            @endif
            @endif
            @endforeach
        </div>
    </div>
</section>
