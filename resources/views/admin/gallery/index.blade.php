@extends('admin.templatesAdmin.app' , ['title' => 'Galeri'])

@section('content')



<section class="section">
    <x-admins.breadcrumb>
        <x-slot name="title">Galeri</x-slot>
        <x-slot name="menu_1">Admin</x-slot>
        <x-slot name="menu_2">Galeri</x-slot>
    </x-admins.breadcrumb>

    <div class="card">
        <div class="card-body">
            <div class="text-right mb-3">
                <a class="btn btn-primary" href="{{ route('admin.gallery.create') }}"><i class="fas fa-plus mr-2"></i> Tambah</a>
            </div>
            <div class="table-responsive">
                <table id="datatable" class="table table-striped table-bordered" >
                    <thead>
                        <tr class="text-center">
                            <th scope="col">No.</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($galleries as $gallery)
                        <tr>
                            <th scope="row" class="text-center">{{$loop->iteration}}</th>
                            <td class="text-center"><img src="{{ $gallery->image() }}" width="200px" alt=""></td>
                            <td class="text-center">
                            <form method="POST" action="{{ route('admin.gallery.destroy', $gallery->id )}}" class="">
                                @csrf
                                @method('delete')
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

