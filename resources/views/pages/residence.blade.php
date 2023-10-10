@extends('layouts.main', ['title' => 'Perumahan'])

@section('content')

{{-- Header --}}
<x-header>
    <x-slot name="page">Perumahan</x-slot>
    <x-slot name="menu_1">Beranda</x-slot>
    <x-slot name="menu_2">Perumahan</x-slot>
</x-header>
<section id="" class="ftco-section">
    <div  class="container">
        <div class="row">
            @foreach ($residences as $residence)
            <div class="col-md-4">
                <a href="{{ route('residence.detail', $residence->slug) }}">
                    <div class="property-wrap ftco-animate">
                        <div class="img d-flex align-items-center justify-content-center"
                        style="background-image: url({{ $residence->featuredImage() }});">
                            <div class="icon d-flex align-items-center justify-content-center btn-custom">
                                @if ($residence->residence_status == 'tersedia')
                                <span class="ion-ios-link"></span>
                                @else
                                <span><img src={{ asset('assets/images/sold-out.png')}} class="img-fluid"></span>
                                @endif

                            </div>
                        </div>
                        <div class="text">
                            <h3 class="mb-0">{{ $residence->residence_name }}</h3>
                            <span class="location d-inline-block mb-3">
                                <i class="ion-ios-pin mr-2"></i>{{ $residence->address }}
                            </span>
                            <ul class="property_list text-muted">
                                <li><i class="fas fa-home mr-2"></i>{{ $residence->types->count() }} Tipe Unit</li>
                                {{-- <li><span class="flaticon-bed"></span>{{ $residence->bedroom }}</li>
                                <li><span class="flaticon-bathtub"></span>{{ $residence->bathroom }}</li>
                                <li><span class="flaticon-floor-plan"></span>{{ $residence->floor }}</li> --}}
                            </ul>

                            <div class="clearfix pt-2 border-top ">
                                @if ($residence->residence_status == 'tersedia')
                                <span class="float-left">Mulai Dari</span>
                                <span class="float-right">Rp. {{ number_format(collect($residence->types)->min('price'),0,',','.') }}</span>
                                @else
                                <div class="text-center text-danger">HABIS TERJUAL</div>
                                @endif

                            </div>

                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
