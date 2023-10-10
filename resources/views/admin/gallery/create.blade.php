@extends('admin.templatesAdmin.app' , ['title' => ' Tambah Galeri Gambar'])

@section('content')
<section class="section">
    <x-admins.breadcrumb>
        <x-slot name="title">Tambah Galeri Gambar</x-slot>
        <x-slot name="menu_1">Admin</x-slot>
        <x-slot name="menu_2">Galeri</x-slot>
        <x-slot name="menu_3">Tambah</x-slot>
    </x-admins.breadcrumb>

    <div class="card">
        <div class="card-body">
            <div class="d-flex  mb-4">
                Tanda (
                <h5 class="text-danger ml-2  mr-2"> * </h5>
                ) Wajib diisi
            </div>
            <form method="POST" action="{{ route('admin.gallery.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label class="d-flex">Gambar (MAKS: 2MB) <h5 class="text-danger ml-2"> * </h5></label>
                    <input type="file" class="form-control @error('image') is-invalid @enderror"
                     name="image" value="{{old('image')}}">
                     @error('image')
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
