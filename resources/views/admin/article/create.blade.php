@extends('admin.templatesAdmin.app' , ['title' => ' Tambah Artikel'])

@section('content')
<section class="section">
    <x-admins.breadcrumb>
        <x-slot name="title">Tambah Artikel</x-slot>
        <x-slot name="menu_1">Admin</x-slot>
        <x-slot name="menu_2">Artikel</x-slot>
        <x-slot name="menu_3">Tambah</x-slot>
    </x-admins.breadcrumb>

    <div class="card">
        <div class="card-body">
            <div class="d-flex  mb-4">
                Tanda (
                <h5 class="text-danger ml-2  mr-2"> * </h5>
                ) Wajib diisi
            </div>
            <form method="POST" action="{{ route('admin.article.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label class="d-flex" for="inputArticle">Judul Artikel <h5 class="text-danger ml-2"> *</h5> </label>
                    <input type="text" class="form-control @error('article_title') is-invalid @enderror"
                     name="article_title" id="inputArticle" value="{{old('article_title')}}">
                     @error('article_title')
                     <div class="text-danger">{{ $message }}</div>
                     @enderror
                </div>

                <div class="form-group">
                    <label class="d-flex">Konten <h5 class="text-danger ml-2"> *</h5> </label>
                    <textarea class="summernote @error('content') is-invalid @enderror"
                     name="content" value="{{old('content')}}"></textarea>
                     @error('content')
                     <div class="text-danger">{{ $message }}</div>
                     @enderror
                </div>

                <div class="form-group">
                    <label class="d-flex">Gambar (MAKS: 2MB) <h5 class="text-danger ml-2"> * </h5></label>
                    <input type="file" class="form-control @error('thumbnail') is-invalid @enderror"
                     name="thumbnail" value="{{old('thumbnail')}}">
                     @error('thumbnail')
                     <div class="text-danger">{{ $message }}</div>
                     @enderror
                </div>

                <div class="form-group">
                    <div class="d-flex justify-content-end">
                        <button type="submit" class=" btn btn-lg btn-primary">Tambah</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</section>
@endsection
