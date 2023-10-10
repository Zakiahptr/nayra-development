@extends('admin.templatesAdmin.app' , ['title' => 'Keunggulan'])

@section('content')
<section class="section">
    <x-admins.breadcrumb>
        <x-slot name="title">Keunggulan</x-slot>
        <x-slot name="menu_1">Admin</x-slot>
        <x-slot name="menu_2">Keunggulan</x-slot>
    </x-admins.breadcrumb>

    <div class="card">
        <div class="card-body">
            <div class="text-right mb-3">
                <a class="btn btn-primary" href="{{ route('admin.service.create') }}"><i class="fas fa-plus mr-2"></i> Tambah</a>
            </div>
            <div class="table-responsive">
            <table id="datatable" class="table table-striped table-bordered" >
                <thead>
                    <tr class="text-center">
                        <th scope="col">No.</th>
                        <th scope="col">Ikon</th>
                        <th scope="col">Keunggulan</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($services as $service)
                    <tr>
                        <th scope="row" class="text-center">{{$loop->iteration}}</th>
                        <td><img src="{{ $service->serviceIcon() }}" width="50px" alt=""></td>
                        <td>{{ $service->service_title }}</td>
                        <td>{{ Str::limit($service->service_desc, 50)}}</td>
                        <td class="text-center">
                            <form method="POST" action="{{ route('admin.service.destroy', $service->id )}}" class="">
                                @csrf
                                @method('delete')
                                <a href="{{ route('admin.service.edit', $service->id )}}" class="btn btn-warning m-2" data-toggle="tooltip" title="Edit"><i class="fas fa-edit"></i></a>
                                <button class="btn btn-danger m-2 confirmDelete" data-toggle="tooltip" title="Hapus"><i class="fas fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </div>
</section>
@endsection

@if (Session::has('status'))
    @push('script')
        <script>
            Swal.fire({
            icon: 'success',
            title: "{{ Session::get('status') }}",
            showConfirmButton: false,
            timer: 1500
            })
        </script>
    @endpush
@endif
