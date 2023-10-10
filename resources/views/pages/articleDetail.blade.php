@extends('layouts.main', ['title' => $article->article_title])

@section('content')

{{-- Header --}}
<x-header>
    <x-slot name="page">Detail Artikel</x-slot>
    <x-slot name="menu_1">Beranda</x-slot>
    <x-slot name="menu_2">Artikel</x-slot>
    <x-slot name="menu_3">Detail Artikel</x-slot>
</x-header>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="blog-details">
                    <img class="img rounded" src="{{ $article->thumbnail() }}">
                    <h1 class="mb-3">{{ $article->article_title }}</h1>
                    <p>{!! $article->content !!}</p>
                </div>
                <hr class="mb-0">
                <p>Dipublikasikan pada {{ $article->created_at->isoFormat('DD-MM-YYYY') }}</p>
            </div>
        </div>
    </div>
</section>

@endsection
