@extends('layouts.main')

@section('container')

@foreach ($posts as $post)
<article class="mb-5 border-bottom pb-4">
    <h2><a href="/blog/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h2>

    <p>By : Mang Dep in : <a class="text-decoration-none" href="/categories/{{ $post->category->slug }}">{{$post->category->name }}</a></p>

    <p>{{ $post->excerpt }}</p>

    <a class="text-decoration-none" href="/blog/{{ $post->slug }}">Read More</a>
</article>
@endforeach

@endsection
