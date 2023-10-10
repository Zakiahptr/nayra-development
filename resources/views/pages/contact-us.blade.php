@extends('layouts.main', ['title' => 'Kontak'])

@section('content')

{{-- Header --}}
<x-header>
    <x-slot name="page">Kontak</x-slot>
    <x-slot name="menu_1">Beranda</x-slot>
    <x-slot name="menu_2">Kontak</x-slot>
</x-header>

{{-- contact --}}
@include('section.contact')

@include('section.form-contact')

@endsection
