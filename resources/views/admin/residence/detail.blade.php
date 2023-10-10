@extends('admin.templatesAdmin.app' , ['title' => 'Detail Perumahan'])

@section('content')
<section class="section">
    <x-admins.breadcrumb>
        <x-slot name="title">Detail Perumahan</x-slot>
        <x-slot name="menu_1">Admin</x-slot>
        <x-slot name="menu_2">Perumahan</x-slot>
        <x-slot name="menu_3">Detail </x-slot>
    </x-admins.breadcrumb>

    <div class="card">
        <div class="card-body">
            <img src="{{ $residence->featuredImage() }}" class="img-fluid">
            <div class="row mt-3">
                <div class="col-md-6">
                    @if ($residence->image_1 != null)
                    <img src="{{ $residence->firstImage() }}" class="img-fluid">
                    @endif
                </div>
                <div class="col-md-6">
                    @if ($residence->image_2 != null)
                    <img src="{{ $residence->secondImage() }}" class="img-fluid">
                    @endif
                </div>
            </div>
            <div class="mt-3">
                <h1 class="text-dark"> {{ $residence->residence_name }}
                    @if ($residence->residence_status == 'tersedia')
                    <span class="badge badge-success">Tersedia</span>
                    @else
                    <span class="badge badge-secondary">Habis Terjual</span>
                    @endif
                    </h1>

                <a href="{{ $residence->address_url }}" target="_blank" class="btn"><h5><i class="fas fa-map-marker-alt mr-2"></i> {{ $residence->address }}</h5><a>
            </div>
            <h4 class="text-dark mt-5"> Deskripsi </h4>
            <div class="container">
                {{-- <div class="row">
                    <div class="col-md-4">
                      <p>Harga : Rp. {{ $residence->price }} </p>
                    </div>
                    <div class="col-md-4">
                        <p>Harga Cicilan Perbulan : Rp. {{ $residence->price_month }} / bulan </p>
                      </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                      <p><i class="fas fa-bed mr-2"></i>{{ $residence->bedroom }} Kamar Tidur</p>
                    </div>
                    <div class="col-md-4">
                        <p><i class="fas fa-bath mr-2"></i>{{ $residence->bathroom }} Kamar Mandi</p>
                    </div>
                    <div class="col-md-4">
                        <p><i class="fas fa-layer-group mr-2"></i>{{ $residence->floor }} Lantai</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                      <p>Tipe : {{ $residence->type }}</p>
                    </div>
                    <div class="col-md-4">
                        <p>Luas Tanah : {{ $residence->land_area }} m<sup>2</sup></p>
                    </div>
                    <div class="col-md-4">
                        <p>Luas Bangunan : {{ $residence->building_area }} m<sup>2</sup></p>
                    </div>
                </div> --}}
                {!! $residence->residence_desc!!}
            </div>

            <h4 class="text-dark mt-5"> Spesifikasi </h4>
            <div class="container">
                {!! $residence->specification!!}
            </div>

            @if ($residence->video != null)
                <h4 class="text-dark mt-5"> Video Terkait </h4>
                <div class="container">
                    <div class="mt-3 text-center">
                        <video controls>
                            <source src="{{ $residence->video() }}"/>
                            Browsermu tidak mendukung fitur ini
                        </video>
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>
@endsection
