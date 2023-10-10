@extends('admin.templatesAdmin.app' , ['title' => ' Edit Tipe Perumahan'])

@section('content')
<section class="section">
    <x-admins.breadcrumb>
        <x-slot name="title">Edit Tipe Perumahan</x-slot>
        <x-slot name="menu_1">Admin</x-slot>
        <x-slot name="menu_2">Tipe Perumahan</x-slot>
        <x-slot name="menu_3">Edit</x-slot>
    </x-admins.breadcrumb>

    <div class="card">
        <div class="card-body">
            <div class="d-flex  mb-4">
                Tanda (
                <h5 class="text-danger ml-2  mr-2"> * </h5>
                ) Wajib diisi
            </div>
            <form method="POST" action="{{ route('admin.type.update', $type->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')

                <div class="form-group">
                    <label class="d-flex" for="selectRecidece">Perumahan <h5 class="text-danger ml-2"> *</h5> </label>
                    <select class="form-control selectric" name="residence_id">
                        <option value="" disabled>Pilih Perumahan</option>
                        @foreach ($residences as $residence)
                        <option value="{{ $residence->id }}" @if ($residence->id === $type->residence_id) selected @endif>{{ $residence->residence_name }}</option>
                        @endforeach
                    </select>
                    @error('residence_id')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label class="d-flex" for="inputprice">Harga (Rp.) <h5 class="text-danger ml-2"> *</h5> </label>
                        <input type="text" class="form-control @error('price') is-invalid @enderror"
                         id="inputprice" name="price" value="{{old('price') ?? $type->price }} ">
                         @error('price')
                         <div class="text-danger">{{ $message }}</div>
                         @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label class="d-flex" for="inputMonthlyPrice">Harga Cicilan Perbulan (Rp./bulan) <h5 class="text-danger ml-2"> *</h5> </label>
                        <input type="text" class="form-control @error('price_month') is-invalid @enderror"
                         id="inputMonthlyPrice" name="price_month" value="{{old('price_month') ?? $type->price_month}}">
                         @error('price_month')
                         <div class="text-danger">{{ $message }}</div>
                         @enderror
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label class="d-flex" for="inputType">Tipe <h5 class="text-danger ml-2"> *</h5> </label>
                        <input type="text" class="form-control @error('type_name') is-invalid @enderror"
                         name="type_name" id="inputType" value="{{old('type_name') ?? $type->type_name}}">
                         @error('type')
                         <div class="text-danger">{{ $message }}</div>
                         @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label class="d-flex" for="inputLandArea">LT (m2) <h5 class="text-danger ml-2"> *</h5> </label>
                        <input type="number" class="form-control @error('land_area') is-invalid @enderror"
                         name="land_area" id="inputLandArea" value="{{old('land_area')?? $type->land_area}}">
                         @error('land_area')
                         <div class="text-danger">{{ $message }}</div>
                         @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label class="d-flex" for="inputBuildingArea">LB (m2) <h5 class="text-danger ml-2"> *</h5></label>
                        <input type="number" class="form-control @error('building_area') is-invalid @enderror"
                         name="building_area" id="inputBuildingArea" value="{{old('building_area')?? $type->building_area}}">
                         @error('building_area')
                         <div class="text-danger">{{ $message }}</div>
                         @enderror
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label class="d-flex" for="inputBedroom">Kamar Tidur <h5 class="text-danger ml-2"> *</h5></label>
                        <input type="number" class="form-control @error('bedroom') is-invalid @enderror"
                         name="bedroom" id="inputBedroom" value="{{old('bedroom')?? $type->bedroom}}">
                         @error('bedroom')
                         <div class="text-danger">{{ $message }}</div>
                         @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label class="d-flex" for="inputBathroom">Kamar Mandi <h5 class="text-danger ml-2"> *</h5></label>
                        <input type="number" class="form-control @error('bathroom') is-invalid @enderror"
                         name="bathroom" id="inputBathroom" value="{{old('bathroom')?? $type->bathroom}}">
                         @error('bathroom')
                         <div class="text-danger">{{ $message }}</div>
                         @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label class="d-flex" for="inputFloor">Lantai <h5 class="text-danger ml-2"> *</h5></label>
                        <input type="number" class="form-control @error('floor') is-invalid @enderror"
                         name="floor" id="inputFloor" value="{{old('floor')?? $type->floor}}">
                         @error('floor')
                         <div class="text-danger">{{ $message }}</div>
                         @enderror
                    </div>
                </div>

                <div class="form-group">
                    <div class="d-flex justify-content-end">
                        <button type="submit" class=" btn btn-lg btn-primary">Edit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
