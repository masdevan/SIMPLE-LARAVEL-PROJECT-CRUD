@extends('layouts.main')

@section('container')
<article>
    <h2>{{ $post->title }}</h2>

    <p>By : <a href="/blog?author={{ $post->author->username }}"
        class="text-decoration-none">{{ $post->author->name }}</a> in : <a class="text-decoration-none"
        href="/blog?category={{ $post->category->slug }}">{{ $post->category->name }}</a>
    <small>{{ $post->created_at->diffForHumans() }}</small>
</p>

@if ($post->image)
<div style="max-height:500px; overflow:hidden;" class="mb-3">
<img src="{{ asset('storage/' . $post->image) }}" class="card-img-top img-fluid mb-5" alt="{{ $post->category->name }}">
</div>
@else
<img src="https://source.unsplash.com/1200x400/?nature" class="card-img-top img-fluid mb-5" alt="{{ $post->category->name }}">
@endif

    <h5>{{ $post->author->name }}</h5>
    <p>{!! $post->body !!}</p>
</article>

<a href="/blog" class="d-block mt-5 text-decoration-none">Back to Post</a>
@endsection
