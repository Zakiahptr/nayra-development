@extends('admin.templatesAdmin.app' , ['title' => 'Edit Testimonial'])

@section('content')
<section class="section">
    <x-admins.breadcrumb>
        <x-slot name="title">Edit testimonial</x-slot>
        <x-slot name="menu_1">Admin</x-slot>
        <x-slot name="menu_2">testimonial</x-slot>
        <x-slot name="menu_3">Edit</x-slot>
    </x-admins.breadcrumb>

    <div class="card">
        <div class="card-body">
            <div class="d-flex  mb-4">
                Tanda (
                <h5 class="text-danger ml-2  mr-2"> * </h5>
                ) Wajib diisi
            </div>
            <form method="POST" action="{{ route('admin.testimonial.update', $testimonial->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')

                <div class="form-group">
                    <label class="d-flex" for="inputClientName">Nama Klien <h5 class="text-danger ml-2"> *</h5> </label>
                    <input type="text" class="form-control @error('client_name') is-invalid @enderror"
                     name="client_name" id="inputClientName" value="{{old('client_name') ?? $testimonial->client_name}}">
                     @error('client_name')
                     <div class="text-danger">{{ $message }}</div>
                     @enderror
                </div>

                <div class="form-group">
                    <label class="d-flex" for="inputJob">Pekerjaan <h5 class="text-danger ml-2"> *</h5> </label>
                    <input type="text" class="form-control @error('client_job') is-invalid @enderror"
                     name="client_job" id="inputJob" value="{{old('client_job') ?? $testimonial->client_job}}">
                     @error('client_job')
                     <div class="text-danger">{{ $message }}</div>
                     @enderror
                </div>

                <div class="form-group">
                    <label class="d-flex">Testimoni <h5 class="text-danger ml-2"> *</h5> </label>
                    <textarea class="form-control @error('testimoni') is-invalid @enderror"
                     name="testimoni">
                     {{old('testimoni') ?? $testimonial->testimoni}}
                    </textarea>
                     @error('testimoni')
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
