@extends('dashboard.layouts.main')
@section('container')
<article>
    <h2>{{ $post->title }}</h2>

    <div class="mb-3">
    <a href="/dashboard/posts" class="btn btn-success me-2"><span data-feather='arrow-left'></span> Back to All my Posts</a>
    <a href="" class="btn btn-warning me-2"><span data-feather='edit'></span> Edit</a>

    <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
        @method('delete')
        @csrf
    <button class="btn btn-danger" onclick="return confirm('Are You Sure?')"><span data-feather='x-circle'></span> Delete</button>
    </form>
    </div>

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
@endsection
