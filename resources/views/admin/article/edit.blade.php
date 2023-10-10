@extends('admin.templatesAdmin.app' , ['title' => ' Edit Artikel'])

@section('content')
<section class="section">
    <x-admins.breadcrumb>
        <x-slot name="title">Edit Artikel</x-slot>
        <x-slot name="menu_1">Admin</x-slot>
        <x-slot name="menu_2">Artikel</x-slot>
        <x-slot name="menu_3">Edit</x-slot>
    </x-admins.breadcrumb>

    <div class="card">
        <div class="card-body">
            <div class="d-flex  mb-4">
                Tanda (
                <h5 class="text-danger ml-2  mr-2"> * </h5>
                ) Wajib diisi
            </div>
            <form method="POST" action="{{ route('admin.article.update', $article->slug) }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')

                <div class="form-group">
                    <label class="d-flex" for="inputArticle">Judul Artikel <h5 class="text-danger ml-2"> *</h5> </label>
                    <input type="text" class="form-control @error('article_title') is-invalid @enderror"
                     name="article_title" id="inputArticle" value="{{old('article_title') ?? $article->article_title}}">
                     @error('article_title')
                     <div class="text-danger">{{ $message }}</div>
                     @enderror
                </div>

                <div class="form-group">
                    <label class="d-flex">Konten <h5 class="text-danger ml-2"> *</h5> </label>
                    <textarea class="summernote @error('content') is-invalid @enderror"
                     name="content">
                     {{old('content') ?? $article->content}}
                    </textarea>
                     @error('content')
                     <div class="text-danger">{{ $message }}</div>
                     @enderror
                </div>

                <div class="form-group">
                    <label class="d-flex">Gambar (MAKS: 2MB) <h5 class="text-danger ml-2"> * </h5></label>
                    <img class="mb-2" src="{{ $article->thumbnail() }}" width="100px">
                    <input type="file" class="form-control @error('thumbnail') is-invalid @enderror"
                     name="thumbnail" value="{{old('thumbnail')}}">
                     @error('thumbnail')
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
