@extends('admin.templatesAdmin.app' , ['title' => 'Detail Tipe Perumahan'])

@section('content')
<section class="section">
    <x-admins.breadcrumb>
        <x-slot name="title">Detail Tipe Perumahan</x-slot>
        <x-slot name="menu_1">Admin</x-slot>
        <x-slot name="menu_2">Tipe Perumahan</x-slot>
        <x-slot name="menu_3">Detail </x-slot>
    </x-admins.breadcrumb>

    <div class="card">
        <div class="card-body">
            <img src="{{ $type->residence->featuredImage() }}" class="img-fluid">
            <div class="row mt-3">
                <div class="col-md-6">
                    @if ($type->residence->image_1 != null)
                    <img src="{{ $type->residence->firstImage() }}" class="img-fluid">
                    @endif
                </div>
                <div class="col-md-6">
                    @if ($type->residence->image_2 != null)
                    <img src="{{ $type->residence->secondImage() }}" class="img-fluid">
                    @endif
                </div>
            </div>
            <div class="mt-3">
                <h1 class="text-dark"> {{ $type->residence->residence_name }}
                    @if ($type->residence->residence_status == 'tersedia')
                    <span class="badge badge-success">Tersedia</span>
                    @else
                    <span class="badge badge-secondary">Habis Terjual</span>
                    @endif
                </h1>
                <h5> <i class="fas fa-map-marker-alt mr-2"></i> {{ $type->residence->address }} </h5>
            </div>
            <h3 class="text-dark mt-5 mb-3"> Tipe {{ $type->type_name }} </h2>
            <div class="container">

                <div class="row">
                    <div class="col-md-4">
                      <p>Harga : Rp. {{ $type->price }} </p>
                    </div>
                    @if($type->price_month != null)
                    <div class="col-md-4">
                        <p>Harga Cicilan Perbulan : Rp. {{ $type->price_month }} / bulan </p>
                      </div>
                    @endif

                </div>
                <div class="row">
                    <div class="col-md-4">
                      <p>Tipe : {{ $type->type_name }}</p>
                    </div>
                    <div class="col-md-4">
                        <p>Luas Tanah : {{ $type->land_area }} m<sup>2</sup></p>
                    </div>
                    <div class="col-md-4">
                        <p>Luas Bangunan : {{ $type->building_area }} m<sup>2</sup></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                      <p><i class="fas fa-bed mr-2"></i>{{ $type->bedroom }} Kamar Tidur</p>
                    </div>
                    <div class="col-md-4">
                        <p><i class="fas fa-bath mr-2"></i>{{ $type->bathroom }} Kamar Mandi</p>
                    </div>
                    <div class="col-md-4">
                        <p><i class="fas fa-layer-group mr-2"></i>{{ $type->floor }} Lantai</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
