@extends('admin.templatesAdmin.app' , ['title' => 'Detail Pesan'])

@section('content')
<section class="section">
    <x-admins.breadcrumb>
        <x-slot name="title">Detail Pesan</x-slot>
        <x-slot name="menu_1">Admin</x-slot>
        <x-slot name="menu_2">Kontak Masuk</x-slot>
        <x-slot name="menu_3">Detail </x-slot>
    </x-admins.breadcrumb>

    <div class="card">
        <div class="card-body">
            <div class="mt-3 mb-3">
                <h6 class="text-dark ">Nama Pengirim : {{ $inbox->sender_name }}</h6>
                <h6 class="text-dark ">Email : {{ $inbox->email }}</h6>
                <h6 class="text-dark ">No. Hp (WhatsApp) : {{ $inbox->phone }}</h6>
                <h6 class="text-dark ">Tanggal : {{ $inbox->created_at->isoFormat('DD-MM-YYYY') }}</h6>
            </div>
            <hr>
            <div class="mb-3">
                <h4 class="text-dark mb-3">Subjek : {{ $inbox->subject }}</h4>
                <p class="text-dark mb-3">{{ $inbox->message }}</p>
            </div>
        </div>
        <div class="card-footer text-right">
            <a href="mailto:{{ $inbox->email }}?
                subject={{ $inbox->subject }}&body={{$replyMessage}}
                %0ANama:%20{{ $inbox->sender_name }}%20
                %0ANo. Hp:%20{{ $inbox->phone }}%20
                %0APesan:%20{{ $inbox->message }}%20
                %0A%0ABalasan%20Kami%20untuk%20pesan%20yang%20telah%20kakak%20kirim:%20%0A" target="_blank" class="btn btn-primary mr-3"><i class="fas fa-envelope"></i> Email</a>
            <a href="https://wa.me/62{{ $inbox->phone }}?
                text={{$replyMessage}}
                %0ANama:%20{{ $inbox->sender_name }}%20
                %0ASubjek:%20{{ $inbox->subject }}%20
                %0APesan:%20{{ $inbox->message }}%20
                %0A%0ABalasan%20Kami%20untuk%20pesan%20yang%20telah%20kakak%20kirim:%20%0A"  target="_blank" class="btn btn-primary"><i class="fab fa-whatsapp"></i> WA</a>
          </div>
    </div>
</section>
@endsection
