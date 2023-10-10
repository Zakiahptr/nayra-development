@extends('admin.templatesAdmin.app' , ['title' => 'Edit Keunggulan'])

@section('content')
<section class="section">
    <x-admins.breadcrumb>
        <x-slot name="title">Edit Keunggulan</x-slot>
        <x-slot name="menu_1">Admin</x-slot>
        <x-slot name="menu_2">Keunggulan</x-slot>
        <x-slot name="menu_3">Edit</x-slot>
    </x-admins.breadcrumb>

    <div class="card">
        <div class="card-body">
            <div class="d-flex  mb-4">
                Tanda (
                <h5 class="text-danger ml-2  mr-2"> * </h5>
                ) Wajib diisi
            </div>
            <form method="POST" action="{{ route('admin.service.update', $service->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')

                <div class="form-group">
                    <label class="d-flex">Ikon (MAKS: 2MB) <h5 class="text-danger ml-2"> * </h5></label>
                    <img class="mb-2" src="{{ $service->serviceIcon() }}" width="100px">
                    <input type="file" class="form-control @error('service_icon') is-invalid @enderror"
                     name="service_icon" value="{{old('service_icon')}}">
                     @error('service_icon')
                     <div class="text-danger">{{ $message }}</div>
                     @enderror
                </div>

                <div class="form-group">
                    <label class="d-flex" for="inputService">Keunggulan <h5 class="text-danger ml-2"> *</h5> </label>
                    <input type="text" class="form-control @error('service_title') is-invalid @enderror"
                     name="service_title" id="inputService" value="{{old('service_title') ?? $service->service_title}}">
                     @error('service_title')
                     <div class="text-danger">{{ $message }}</div>
                     @enderror
                </div>

                <div class="form-group">
                    <label class="d-flex" for="inputDesc">Deskripsi <h5 class="text-danger ml-2"> *</h5> </label>
                    <input type="text" class="form-control @error('service_desc') is-invalid @enderror"
                     name="service_desc" id="inputDesc" value="{{old('service_desc') ?? $service->service_desc}}">
                     @error('service_desc')
                     <div class="text-danger">{{ $message }}</div>
                     @enderror
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
