@extends('admin.templatesAdmin.app' , ['title' => 'Perumahan'])

@section('content')
<section class="section">
    <x-admins.breadcrumb>
        <x-slot name="title">Perumahan</x-slot>
        <x-slot name="menu_1">Admin</x-slot>
        <x-slot name="menu_2">Perumahan</x-slot>
    </x-admins.breadcrumb>

    <div class="card">
        <div class="card-body">
            <div class="text-right mb-3">
                <a class="btn btn-primary" href="{{ route('admin.residence.create') }}"><i class="fas fa-plus mr-2"></i> Tambah</a>
            </div>
            <div class="table-responsive">
                <table id="datatable" class="table table-striped table-bordered" >
                    <thead>
                        <tr class="text-center">
                            <th scope="col">No.</th>
                            <th scope="col">Gambar</th>
                            <th scope="col"> Nama Perumahan</th>
                            <th scope="col"> Status</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($residences as $residence)
                        <tr>
                            <th scope="row" class="text-center">{{$loop->iteration}}</th>
                            <td class="text-center"><img src="{{ $residence->featuredImage() }}" width="200px" height="100px" alt=""></td>
                            <td>{{ $residence->residence_name }}</td>
                            <td>@if ($residence->residence_status == 'tersedia')
                                <span class="badge badge-info">Tersedia</span>
                                @else
                                <span class="badge badge-secondary">Habis Terjual</span>
                                @endif
                                </td>
                            <td class="text-center">
                                <form method="POST" action="{{ route('admin.residence.destroy', $residence->slug )}}" class="">
                                    @csrf
                                    @method('delete')
                                    <a href="{{ route('admin.residence.edit', $residence->slug )}}" class="btn btn-warning m-2" data-toggle="tooltip" title="Edit"><i class="fas fa-edit"></i></a>
                                    <button class="btn btn-danger m-2 confirmDelete" data-toggle="tooltip" title="Hapus"><i class="fas fa-trash-alt"></i></button>
                                    <a href="{{ route('admin.residence.detail', $residence->slug )}}" class="btn btn-success m-2" data-toggle="tooltip" title="Detail"><i class="fas fa-eye"></i></a>
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
