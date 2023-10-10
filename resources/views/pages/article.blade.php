@extends('layouts.main', ['title' => 'Artikel'])

@section('content')

{{-- Header --}}
<x-header>
    <x-slot name="page">Artikel</x-slot>
    <x-slot name="menu_1">Beranda</x-slot>
    <x-slot name="menu_2">Artikel</x-slot>
</x-header>
<section class="ftco-section">
    <div class="container">
        <div class="row d-flex">
            @foreach ($articles as $article)
            <div class="col-md-3 d-flex ftco-animate">
                <a href="{{ route('article.detail',  $article->slug) }}">
                    <div class="blog-entry justify-content-end">
                        <div class="text">
                            <img class="block-20 img" src="{{ $article->thumbnail()}}">
                            <h3 class="heading">
                                    {{ Str::limit($article->article_title, 50)}}
                            </h3>
                            <div class="meta mb-3">
                                    {{ $article->created_at->isoFormat('DD-MM-YYYY') }}
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
