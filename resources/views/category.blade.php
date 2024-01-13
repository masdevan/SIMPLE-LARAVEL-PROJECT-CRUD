@extends('layouts.main')

@section('container')

<h1 class="mb-5">Post Categories</h1>

@foreach ($posts as $post)
<ul>
    <li><a href="/categories/{{ $post->slug }}">{{ $post->name }}</a></li>
</ul>
@endforeach

@endsection
