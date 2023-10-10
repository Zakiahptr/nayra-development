@extends('admin.templatesAdmin.app' , ['title' => 'Dasbor'])



@section('content')
<section class="section">
    <x-admins.breadcrumb>
        <x-slot name="title">Dasbor</x-slot>
        <x-slot name="menu_1">Admin</x-slot>
        <x-slot name="menu_2">Dasbor</x-slot>
    </x-admins.breadcrumb>

    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <a href="{{ route('admin.residence.index') }}">
                <div class="card card-statistic-1 btn-outline-light">
                    <div class="card-icon bg-primary">
                        <i class="fas fa-home"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Perumahan</h4>
                        </div>
                        <div class="card-body">{{ count($residences) }}</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <a href="{{ route('admin.article.index') }}">
                <div class="card card-statistic-1 btn-outline-light">
                    <div class="card-icon bg-danger">
                        <i class="fas fa-newspaper"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Artikel</h4>
                        </div>
                        <div class="card-body">
                            {{ count($articles) }}
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <a href="{{ route('admin.inbox.index') }}">
                <div class="card card-statistic-1 btn-outline-light">
                    <div class="card-icon bg-warning">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Kontak Masuk</h4>
                        </div>
                        <div class="card-body">
                            {{ count($inboxes) }}
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <a href="{{ route('admin.testimonial.index') }}">
                <div class="card card-statistic-1 btn-outline-light">
                    <div class="card-icon bg-success">
                        <i class="fas fa-comment-dots"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Testimoni</h4>
                        </div>
                        <div class="card-body">
                            {{ count($testimonials) }}
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>
@endsection
