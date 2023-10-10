@extends('admin.templatesAdmin.app' , ['title' => 'Kontak Masuk'])

@section('content')
<section class="section">
    <x-admins.breadcrumb>
        <x-slot name="title">Kontak Masuk</x-slot>
        <x-slot name="menu_1">Admin</x-slot>
        <x-slot name="menu_2">Kontak Masuk</x-slot>
    </x-admins.breadcrumb>

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="datatable" class="table table-striped table-bordered" >
                    <thead>
                        <tr class="text-center">
                            <th scope="col">No.</th>
                            <th scope="col">Nama Pengirim</th>
                            <th scope="col">Subjek</th>
                            <th scope="col">Pesan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($inboxes as $inbox)
                        <tr>
                            <th scope="row" class="text-center">{{$loop->iteration}}</th>
                            <td>{{ $inbox->sender_name }}</td>
                            <td>{{ $inbox->subject }}</td>
                            <td>{{ Str::limit($inbox->message, 40)}}</td>
                            <td class="text-center">
                                <form method="POST" action="{{ route('admin.inbox.destroy', $inbox->id )}}" class="">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger m-2 confirmDelete" data-toggle="tooltip" title="Hapus"><i class="fas fa-trash-alt"></i></button>
                                    <a href="{{ route('admin.inbox.detail', $inbox->id )}}" class="btn btn-success m-2" data-toggle="tooltip" title="Detail"><i class="fas fa-eye"></i></a>
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
