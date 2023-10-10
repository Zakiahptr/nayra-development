@extends('layouts.main', ['title' => 'Beranda'])

@section('content')

{{-- Header --}}
@include('section.home.header')

{{-- Perumahan --}}
@include('section.home.residence')

{{-- Keunggulan --}}
@include('section.home.our-service')

{{-- Artikel --}}
@include('section.testimonial')

{{-- Artikel --}}
@include('section.home.article')

{{-- Hubungi Kami --}}
@include('section.form-contact')


@endsection
