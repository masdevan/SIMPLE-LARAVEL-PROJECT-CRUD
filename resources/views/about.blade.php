@extends('layouts.main')

@section('container')
    <h1>Ini Halaman About</h1>
    <h2>Nama : {{ $name }}</h2>
    <h3>Email : {{ $email }}</h3>

    <img class="img-thumb rounded-circle" src="img/{{ $images }}" alt="Profil_Images" width="200" height="200">
@endsection
