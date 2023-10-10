@extends('admin.templatesAdmin.app' , ['title' => ' Tambah Alur Kerja'])

@section('content')
<section class="section">
    <x-admins.breadcrumb>
        <x-slot name="title">Tambah Alur Kerja</x-slot>
        <x-slot name="menu_1">Admin</x-slot>
        <x-slot name="menu_2">Alur Kerja</x-slot>
        <x-slot name="menu_3">Tambah</x-slot>
    </x-admins.breadcrumb>

    <div class="card">
        <div class="card-body">
            <div class="d-flex  mb-4">
                Tanda (
                <h5 class="text-danger ml-2  mr-2"> * </h5>
                ) Wajib diisi
            </div>
            <form method="POST" action="{{ route('admin.workflow.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label class="d-flex">Ikon (MAKS: 2MB) <h5 class="text-danger ml-2"> * </h5></label>
                    <input type="file" class="form-control @error('flow_icon') is-invalid @enderror"
                     name="flow_icon" value="{{old('flow_icon')}}">
                     @error('flow_icon')
                     <div class="text-danger">{{ $message }}</div>
                     @enderror
                </div>

                <div class="form-group">
                    <label class="d-flex" for="inputflow">Alur Kerja <h5 class="text-danger ml-2"> *</h5> </label>
                    <input type="text" class="form-control @error('flow_title') is-invalid @enderror"
                     name="flow_title" id="inputflow" value="{{old('flow_title')}}">
                     @error('flow_title')
                     <div class="text-danger">{{ $message }}</div>
                     @enderror
                </div>

                <div class="form-group">
                    <label class="d-flex" for="inputDesc">Deskripsi <h5 class="text-danger ml-2"> *</h5> </label>
                    <input type="text" class="form-control @error('flow_desc') is-invalid @enderror"
                     name="flow_desc" id="inputDesc" value="{{old('flow_desc')}}">
                     @error('flow_desc')
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
