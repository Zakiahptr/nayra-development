@extends('admin.templatesAdmin.app' , ['title' => ' Tambah Perumahan'])

@section('content')
<section class="section">
    <x-admins.breadcrumb>
        <x-slot name="title">Tambah Perumahan</x-slot>
        <x-slot name="menu_1">Admin</x-slot>
        <x-slot name="menu_2">Perumahan</x-slot>
        <x-slot name="menu_3">Tambah</x-slot>
    </x-admins.breadcrumb>

    <div class="card">
        <div class="card-body">
            <div class="d-flex  mb-4">
                Tanda (
                <h5 class="text-danger ml-2  mr-2"> * </h5>
                ) Wajib diisi
            </div>
            <form method="POST" action="{{ route('admin.residence.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label class="d-flex" for="inputRecidece">Nama Perumahan <h5 class="text-danger ml-2"> *</h5> </label>
                    <input type="text" class="form-control @error('residence_name') is-invalid @enderror"
                     name="residence_name" id="inputResidence" value="{{old('residence_name')}}">
                     @error('residence_name')
                     <div class="text-danger">{{ $message }}</div>
                     @enderror
                </div>

                <div class="form-group">
                    <label class="d-flex" for="inputAddress">Alamat <h5 class="text-danger ml-2"> *</h5></label>
                    <input type="text" class="form-control @error('address') is-invalid @enderror"
                     id="inputAddress" name="address" value="{{old('address')}}">
                     @error('address')
                     <div class="text-danger">{{ $message }}</div>
                     @enderror
                </div>

                <div class="form-group">
                    <label class="d-flex" for="inputAddressUrl">Link Alamat (GMaps) </label>
                    <input type="text" class="form-control @error('address_url') is-invalid @enderror"
                     id="inputAddressUrl" name="address_url" value="{{old('address_url')}}">
                     @error('address_url')
                     <div class="text-danger">{{ $message }}</div>
                     @enderror
                </div>

                {{-- <div class="form-row">
                    <div class="form-group col-md-6">
                        <label class="d-flex" for="inputprice">Harga (Rp.) <h5 class="text-danger ml-2"> *</h5> </label>
                        <input type="text" class="form-control @error('price') is-invalid @enderror"
                         id="inputprice" name="price" value="{{old('price')}}">
                         @error('price')
                         <div class="text-danger">{{ $message }}</div>
                         @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label class="d-flex" for="inputMonthlyPrice">Harga Cicilan Perbulan (Rp./bulan) <h5 class="text-danger ml-2"> *</h5> </label>
                        <input type="text" class="form-control @error('price_month') is-invalid @enderror"
                         id="inputMonthlyPrice" name="price_month" value="{{old('price_month')}}">
                         @error('price_month')
                         <div class="text-danger">{{ $message }}</div>
                         @enderror
                    </div>
                </div> --}}

                <div class="form-group">
                    <label class="d-flex">Deskripsi <h5 class="text-danger ml-2"> *</h5> </label>
                    <textarea class="summernote @error('residence_desc') is-invalid @enderror"
                     name="residence_desc" value="{{old('residence_desc')}}"></textarea>
                     @error('residence_desc')
                     <div class="text-danger">{{ $message }}</div>
                     @enderror
                </div>

                {{-- <div class="form-row">
                    <div class="form-group col-md-4">
                        <label class="d-flex" for="inputType">Tipe <h5 class="text-danger ml-2"> *</h5> </label>
                        <input type="text" class="form-control @error('type') is-invalid @enderror"
                         name="type" id="inputType" value="{{old('type')}}">
                         @error('type')
                         <div class="text-danger">{{ $message }}</div>
                         @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label class="d-flex" for="inputLandArea">LT (m2) <h5 class="text-danger ml-2"> *</h5> </label>
                        <input type="number" class="form-control @error('land_area') is-invalid @enderror"
                         name="land_area" id="inputLandArea" value="{{old('land_area')}}">
                         @error('land_area')
                         <div class="text-danger">{{ $message }}</div>
                         @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label class="d-flex" for="inputBuildingArea">LB (m2) <h5 class="text-danger ml-2"> *</h5></label>
                        <input type="number" class="form-control @error('building_area') is-invalid @enderror"
                         name="building_area" id="inputBuildingArea" value="{{old('building_area')}}">
                         @error('building_area')
                         <div class="text-danger">{{ $message }}</div>
                         @enderror
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label class="d-flex" for="inputBedroom">Kamar Tidur <h5 class="text-danger ml-2"> *</h5></label>
                        <input type="number" class="form-control @error('bedroom') is-invalid @enderror"
                         name="bedroom" id="inputBedroom" value="{{old('bedroom')}}">
                         @error('bedroom')
                         <div class="text-danger">{{ $message }}</div>
                         @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label class="d-flex" for="inputBathroom">Kamar Mandi <h5 class="text-danger ml-2"> *</h5></label>
                        <input type="number" class="form-control @error('bathroom') is-invalid @enderror"
                         name="bathroom" id="inputBathroom" value="{{old('bathroom')}}">
                         @error('bathroom')
                         <div class="text-danger">{{ $message }}</div>
                         @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label class="d-flex" for="inputFloor">Lantai <h5 class="text-danger ml-2"> *</h5></label>
                        <input type="number" class="form-control @error('floor') is-invalid @enderror"
                         name="floor" id="inputFloor" value="{{old('floor')}}">
                         @error('floor')
                         <div class="text-danger">{{ $message }}</div>
                         @enderror
                    </div>
                </div> --}}

                <div class="form-group">
                    <label class="d-flex">Spesifikasi <h5 class="text-danger ml-2"> *</h5></label>
                    <textarea class="summernote @error('specification') is-invalid @enderror"
                     name="specification" value="{{old('specification')}}"></textarea>
                     @error('specification')
                     <div class="text-danger">{{ $message }}</div>
                     @enderror
                </div>

                <div class="form-group">
                    <label class="d-flex">Gambar Terkait (MAKS: 2MB) <h5 class="text-danger ml-2"> * </h5></label>
                    <input type="file" class="form-control @error('featured_image') is-invalid @enderror"
                     name="featured_image" value="{{old('featured_image')}}">
                     @error('featured_image')
                     <div class="text-danger">{{ $message }}</div>
                     @enderror
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Gambar 1 (MAKS: 2MB)</label>
                        <input type="file" class="form-control @error('image_1') is-invalid @enderror"
                         name="image_1" value="{{old('image_1')}}">
                         @error('image_1')
                         <div class="text-danger">{{ $message }}</div>
                         @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Gambar 2 (MAKS: 2MB)</label>
                        <input type="file" class="form-control @error('image_2') is-invalid @enderror"
                         name="image_2" value="{{old('image_2')}}">
                         @error('image_2')
                         <div class="text-danger">{{ $message }}</div>
                         @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Video Terkait</label>
                    <input type="file" class="form-control @error('video') is-invalid @enderror"
                     name="video" value="{{old('video')}}">
                     @error('video')
                     <div class="text-danger">{{ $message }}</div>
                     @enderror
                </div>

                <div class="form-group">
                    <label class="d-flex" for="selectRecidece">Status Perumahan <h5 class="text-danger ml-2"> *</h5> </label>
                    <select class="form-control" name="residence_status">
                        <option value="tersedia"selected>Tersedia</option>
                        <option value="habis">Habis Terjual</option>
                    </select>
                    @error('residence_status')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <div class="d-flex justify-content-end">
                        <button type="submit" class=" btn btn-lg btn-primary">Tambah</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</section>
@endsection
