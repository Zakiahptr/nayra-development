@extends('admin.templatesAdmin.app' , ['title' => 'Tipe Perumahan'])

@section('content')
<section class="section">
    <x-admins.breadcrumb>
        <x-slot name="title">Tipe Perumahan</x-slot>
        <x-slot name="menu_1">Admin</x-slot>
        <x-slot name="menu_2">Tipe Perumahan</x-slot>
    </x-admins.breadcrumb>

    <div class="card">
        <div class="card-body">
            <div class="text-right mb-3">
                <a class="btn btn-primary" href="{{ route('admin.type.create') }}"><i class="fas fa-plus mr-2"></i> Tambah</a>
            </div>
            <div class="table-responsive">
                <table id="datatable" class="table table-striped table-bordered" >
                    <thead>
                        <tr class="text-center">
                            <th scope="col">No.</th>
                            <th scope="col"> Nama Perumahan</th>
                            <th scope="col"> Tipe Perumahan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($types as $type)
                        <tr>
                            <th scope="row" class="text-center">{{$loop->iteration}}</th>
                            <td>{{ $type->residence->residence_name }}</td>
                            <td>{{ $type->type_name }}</td>
                            <td class="text-center">
                                <form method="POST" action="{{ route('admin.type.destroy', $type->id)}}" class="">
                                    @csrf
                                    @method('delete')
                                    <a href="{{ route('admin.type.edit', $type->id )}}" class="btn btn-warning m-2" data-toggle="tooltip" title="Edit"><i class="fas fa-edit"></i></a>
                                    <button  class="btn btn-danger m-2 confirmDelete" data-toggle="tooltip" title="Hapus"><i class="fas fa-trash-alt"></i></button>
                                    <a href="{{ route('admin.type.detail', $type->id )}}" class="btn btn-success m-2" data-toggle="tooltip" title="Detail"><i class="fas fa-eye"></i></a>
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
