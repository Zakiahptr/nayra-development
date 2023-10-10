@extends('admin.templatesAdmin.app' , ['title' => 'Detail Artikel'])

@section('content')
<section class="section">
    <x-admins.breadcrumb>
        <x-slot name="title">Detail Artikel</x-slot>
        <x-slot name="menu_1">Admin</x-slot>
        <x-slot name="menu_2">Artikel</x-slot>
        <x-slot name="menu_3">Detail </x-slot>
    </x-admins.breadcrumb>

    <div class="card">
        <div class="card-body">
            <div class="mt-3 text-center">
                <h1 class="text-dark mb-3"> {{ $article->article_title }}</h1>
                <img src="{{ $article->thumbnail() }}" class="img-fluid">
            </div>
            <h6 class="text-dark mt-3"> {!! $article->content !!}</h6>
            <hr>
            Dipublikasikan pada {{ $article->created_at->isoFormat('DD-MM-YYYY') }}
        </div>
    </div>
</section>
@endsection
