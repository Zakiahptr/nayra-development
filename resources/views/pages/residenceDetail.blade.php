@extends('layouts.main', ['title' => $residence->residence_name])

@section('content')

{{-- Header --}}
<x-header>
    <x-slot name="page">Detail Perumahan</x-slot>
    <x-slot name="menu_1">Beranda</x-slot>
    <x-slot name="menu_2">Perumahan</x-slot>
    <x-slot name="menu_3">Detail Perumahan</x-slot>
</x-header>

<section class="ftco-section ftco-property-details">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="property-details">
                    <img class="img rounded" src="{{ $residence->featuredImage() }}">
                    <div class="row">
                        <div class="col-md-6">
                            @if ($residence->image_1 != null)
                            <img class="img-2 rounded" src="{{ $residence->firstImage() }}" >
                            @endif
                        </div>
                        <div class="col-md-6">
                            @if ($residence->image_2 != null)
                            <img class="img-2 rounded" src="{{ $residence->secondImage() }}" >
                            @endif
                        </div>
                    </div>
                    <div class="text">
                        <h1>{{ $residence->residence_name }}</h1>
                        <a href="{{ $residence->address_url }}" target="_blank"><span class="subheading"> <i class="fas fa-map-marker-alt fa-lg mr-3"></i>{{ $residence->address }}</span></a>
                    </div>
                </div>
                <div class="text-center mt-3">
                    @if ($residence->residence_status == 'tersedia')
                    <a href="https://wa.me/628158904564?text={{$message}}" target="_blank" class="btn btn-primary"><h4 class="mb-0 p-2 text-light"><i class="fab fa-whatsapp fa-lg mr-2"></i> Beli Sekarang</h4></a>
                    @else
                    <button class="btn btn-danger btn-lg disabled"><h3 class="mb-0 p-2 text-light">HABIS TERJUAL</h3></button>
                    @endif
                </div>
                <p class="mb-0">{!! $residence->residence_desc !!}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 pills">
                <div class="bd-example bd-example-tabs">
                    <div class="d-flex">
                        <ul class="nav nav-pills mb-2" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-manufacturer-tab" data-toggle="pill" href="#pills-manufacturer" role="tab" aria-controls="pills-manufacturer" aria-expanded="true">Spesifikasi</a>
                            </li>
                            @if ($residence->residence_status == 'tersedia')
                                @foreach ($residence->types as $type)
                                <li class="nav-item">
                                    <a class="nav-link " id="pills-description-tab" data-toggle="pill" href="#pills-description-{{ $type->id }}" role="tab" aria-controls="pills-description" aria-expanded="true">Tipe {{ $type->type_name }}</a>
                                </li>
                                @endforeach
                            @endif
                        </ul>
                    </div>

                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-manufacturer" role="tabpanel" aria-labelledby="pills-manufacturer-tab">
                            <p>{!! $residence->specification  !!}</p>
                        </div>
                        @foreach ($residence->types as $type)
                        <div class="tab-pane fade" id="pills-description-{{ $type->id }}" role="tabpanel" aria-labelledby="pills-description-tab">
                            <div class="row">
                                <div class="col-md-4">
                                    <p class="font-weight-bold">Harga : Rp. {{ number_format($type->price,0,',','.') }}<p>
                                </div>
                                <div class="col-md-6">
                                    <p class="font-weight-bold">Perkiraan Cicilan Perbulan : Rp. {{ number_format($type->price_month,0,',','.') }} / Bulan<p>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <p>Tipe : {{ $type->type_name}} <p>
                                </div>
                                <div class="col-md-4">
                                    <p>Luas Tanah : {{ $type->land_area }} m<sup>2</sup><p>
                                </div>
                                <div class="col-md-4">
                                    <p>Luas Bangunan: {{ $type->building_area }} m<sup>2</sup><p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <p><span class="flaticon-bed mr-2"></span>{{ $type->bedroom }} Kamar Tidur<p>
                                </div>
                                <div class="col-md-4">
                                    <p><span class="flaticon-bathtub mr-2"></span>{{ $type->bathroom }} Kamar Mandi<p>
                                </div>
                                <div class="col-md-4">
                                    <p><span class="flaticon-floor-plan mr-2"></span>{{ $type->floor }} Lantai<p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        @if ($residence->video != null)
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h4 class="py-5 font-weight-bold">Video Terkait</h4>
                <div class="mt-3 text-center">
                    <video controls>
                        <source src="{{ $residence->video() }}"/>
                        Browsermu tidak mendukung fitur ini
                    </video>
                </div>
            </div>
        </div>
        @endif

    </div>
</section>

@endsection
