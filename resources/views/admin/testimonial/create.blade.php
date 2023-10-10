@extends('admin.templatesAdmin.app' , ['title' => 'Tambah Testimonial'])

@section('content')
<section class="section">
    <x-admins.breadcrumb>
        <x-slot name="title">Tambah testimonial</x-slot>
        <x-slot name="menu_1">Admin</x-slot>
        <x-slot name="menu_2">testimonial</x-slot>
        <x-slot name="menu_3">Tambah</x-slot>
    </x-admins.breadcrumb>

    <div class="card">
        <div class="card-body">
            <div class="d-flex  mb-4">
                Tanda (
                <h5 class="text-danger ml-2  mr-2"> * </h5>
                ) Wajib diisi
            </div>
            <form method="POST" action="{{ route('admin.testimonial.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label class="d-flex" for="inputClientName">Nama Klien <h5 class="text-danger ml-2"> *</h5> </label>
                    <input type="text" class="form-control @error('client_name') is-invalid @enderror"
                     name="client_name" id="inputClientName" value="{{old('client_name')}}">
                     @error('client_name')
                     <div class="text-danger">{{ $message }}</div>
                     @enderror
                </div>

                <div class="form-group">
                    <label class="d-flex" for="inputJob">Pekerjaan <h5 class="text-danger ml-2"> *</h5> </label>
                    <input type="text" class="form-control @error('client_job') is-invalid @enderror"
                     name="client_job" id="inputJob" value="{{old('client_job')}}">
                     @error('client_job')
                     <div class="text-danger">{{ $message }}</div>
                     @enderror
                </div>

                <div class="form-group">
                    <label class="d-flex">Testimoni <h5 class="text-danger ml-2"> *</h5> </label>
                    <textarea class="form-control @error('testimoni') is-invalid @enderror"
                     name="testimoni" value="{{old('testimoni')}}"></textarea>
                     @error('testimoni')
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
