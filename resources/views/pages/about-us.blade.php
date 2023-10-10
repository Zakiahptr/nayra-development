@extends('layouts.main', ['title' => 'Tentang Kami'])

@section('content')

{{-- Header --}}
<x-header>
    <x-slot name="page">Tentang Kami</x-slot>
    <x-slot name="menu_1">Beranda</x-slot>
    <x-slot name="menu_2">Tentang Kami</x-slot>
</x-header>

{{-- Profile --}}
@include('section.profile')

{{-- Artikel --}}
@include('section.workflow')

{{-- Keunggulan --}}
@include('section.service')

{{-- testimonial --}}
@include('section.testimonial')

{{-- gallery --}}
@include('section.gallery')


@endsection
