@extends('layout.master')

@section('main')
    <h1>Halaman About</h1>
    <h3>{{ $nama }}</h3>
    <p>{{ $email }}</p>
    <img src="image/{{ $gambar }}">
@endsection
